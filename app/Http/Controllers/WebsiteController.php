<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }

    public function showProjects($type){
        return view('site.pages.project', compact('type'));
    }
}
