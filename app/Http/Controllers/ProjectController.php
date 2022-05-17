<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * @param $type
     * @return Application|Factory|RedirectResponse|View
     */
    public function show($type)
    {
        $projects = Project::query()->whereHas('type', function ($query) use ($type) {
            $query->where('slug', '=', $type);
        })->orderByDesc('created_at')->get();

        if ($projects->isEmpty()) {
            return redirect()->route('site');
        }

        return view('site.pages.projects.index', compact(['projects', 'type']));
    }
}
