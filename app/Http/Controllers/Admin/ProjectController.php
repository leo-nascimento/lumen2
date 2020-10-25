<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Project;
use App\ProjectTypes;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = Project::query()->orderByDesc('created_at')->get();
        return view('admin.projects.index', compact(['projects']));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $types = ProjectTypes::all();
        return view('admin.projects.create', compact(['types']));
    }

    /**
     * @param ProjectRequest $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            toastr()->error('Existem erros no formulario, verifique os campos');

            return back()->withErrors($validator)->withInput();
        }

        $project = Project::create($request->all());
        $file = $request->file('file');
        $project->saveImage($file);

        toastr()->success('Projeto criado com sucesso!');

        return redirect()->route('projects.index');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        return view('admin.projects.show');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $types = ProjectTypes::all();
        return view('admin.projects.edit', compact(['project', 'types']));
    }

    /**
     * @param ProjectRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::find($id);

        if (!empty($project)) {
            $project->update($request->all());
            $file = $request->file('file');
            if (!empty($file)) {
                $project->saveImage($file);
            }
        }

        return redirect()->route('projects.index');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if (!empty($project)) {
            $project->delete();
        }

        return redirect()->route('projects.index');
    }
}
