<?php

namespace App\Http\Controllers;

use App\Mail\BudgetMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }

    public function showProjects($type){
        return view('site.pages.project', compact('type'));
    }

    public function sendContact(Request $request){
        dd($request);
    }

    public function storeBudget(Request $request){

        echo $request[formData];

        //$sendmail = Mail::to('cardoso.paranhos@gmail.com')->send(new BudgetMail($request, $data));
        //$data = $request->all();
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}
