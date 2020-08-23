<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(6);

        if ($request->ajax()) {
            $view = view('site.pages.posts.posts-paginate',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('site.pages.posts.index', compact('posts'));
    }
}
