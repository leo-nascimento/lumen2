<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Post;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        $posts = Post::query()->orderByDesc('created_at')->get();
        return view('admin.posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param StorePost $request
     * @return RedirectResponse
     */
    public function store(StorePost $request)
    {
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            toastr()->error('Existem erros no formulario, verifique os campos');

            return back()->withErrors($validator)->withInput();
        }

        $post = new Post();
        $post->title = $request->input('title');
        $post->summary = $request->input('summary');
        $post->description = $request->input('description');
        $post->save();

        // Save file
        $file = $request->file('file');
        $post->saveImage($file);

        toastr()->success('O post foi salvo com sucesso');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (isset($post)) {
            $post->title = $request->input('title');
            $post->summary = $request->input('summary');
            $post->description = $request->input('description');
            $post->save();

            // Save file
            $file = $request->file('file');
            $post->saveImage($file);
        }

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (isset($post))
            $post->delete();

        return redirect()->route('posts.index');
    }
}
