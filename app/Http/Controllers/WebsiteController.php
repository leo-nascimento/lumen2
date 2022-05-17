<?php

namespace App\Http\Controllers;

use App\AccountCalculation;
use App\Mail\BudgetMail;
use App\Mail\ContactMail;
use App\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $posts = Post::query()->limit(5)->orderByDesc('created_at')->get();
        return view('site.pages.index', compact(['posts']));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function sendContact(Request $request)
    {
        try {
            $data = $request->all();
            $email = 'contato@lumen.bsb.br';
            Mail::to($email)->send(new ContactMail($request, $data));

            return response()->json([
                'success' => true,
                'type' => 'success',
                'message' => 'A mensagem foi enviada.',
            ]);
        } catch (\Exception $ex) {
            Log::error($ex);

            return response()->json([
                'success' => false,
                'type' => 'error',
                'message' => 'Ops! Tivemos um problema. Tente novamente.',
            ]);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function storeBudget(Request $request)
    {
        try {
            $data = $request->all();
            $email = 'contato@lumen.bsb.br';
            Mail::to($email)->send(new BudgetMail($request, $data));

            return response()->json([
                'success' => true,
                'type' => 'success',
                'message' => 'Um e-mail foi enviado a você.',
            ]);
        } catch (\Exception $ex) {
            Log::error($ex);

            return response()->json([
                'success' => false,
                'type' => 'error',
                'message' => 'Ops! Tivemos um problema. Tente novamente.',
            ]);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function calculateEconomy(Request $request)
    {
        try {
            $byBillPrice = $request->avarage_option === 'avarage_bill_price';

            $billPrice = null;
            if ($byBillPrice) {
                $source = array('R$ ', '.', ',');
                $replace = array('', '', '.');
                $billPrice = floatval(str_replace($source, $replace, $request->bill_price));
            }

            $accountCalculation = AccountCalculation::query()
                ->when(!$byBillPrice, function($query) use($request) {
                    $query->where('average_consumption', '>=', intval($request->consumption));
                })->when(!!$byBillPrice, function($query) use($billPrice) {
                    $query->where('average_bill_price', '>=', $billPrice);
                })->first();

            if (empty($accountCalculation)) {
                return response()->json([
                    'success' => false,
                    'type' => 'info',
                    'message' => 'Nenhuma previsão encontrada para a média de consumo informada.',
                ]);
            }

            $valueAccount = $byBillPrice ? $billPrice : $accountCalculation->average_bill_price;
            $valueEconomy = (($valueAccount - 80) * 12);
            if ($valueEconomy < 0) {
                $valueEconomy = 0;
            }

            return response()->json([
                'success' => true,
                'economy_value' => $valueEconomy,
                'power' => $accountCalculation->power,
                'final_value' => $accountCalculation->final_value,
                'call_function' => 'economyResult',
            ]);
        } catch (\Exception $ex) {
            Log::error($ex);

            return response()->json([
                'success' => false,
                'type' => 'error',
                'message' => 'Ops! Tivemos um problema. Tente novamente.',
            ]);
        }
    }
}
