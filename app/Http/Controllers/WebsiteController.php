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
     * @param $type
     * @return Application|Factory|View
     */
    public function showProjects($type)
    {
        return view('site.pages.project', compact('type'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function sendContact(Request $request)
    {
        try {
            $data = $request->all();
            Mail::to($request->email)->send(new ContactMail($request, $data));

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
            Mail::to($request->email)->send(new BudgetMail($request, $data));

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
            // money to decimal
            $source = array('R$ ', '.', ',');
            $replace = array('', '', '.');
            $billPrice = floatval(str_replace($source, $replace, $request->bill_price));

            // search in database
            $accountCalculation = AccountCalculation::query()
                ->where('average_consumption', '>=', intval($request->consumption))
                ->where('average_bill_price', '>=', $billPrice)
                ->first();

            if (empty($accountCalculation)) {
                return response()->json([
                    'success' => false,
                    'type' => 'info',
                    'message' => 'Nenhuma previsão encontrada para a média de consumo informada.',
                ]);
            }

            $total = number_format($accountCalculation->final_value, 2, ',', '.');
            return response()->json([
                'success' => true,
                'total' => "R$ {$total}",
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
