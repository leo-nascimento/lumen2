@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid p-md-4 px-3 h-100">
        <x-title-view title="Listagem de projetos" titleIcon="project-diagram" buttonColor="primary-bg" buttonIcon="plus"
                      buttonLabel="Novo" route="projects.create"></x-title-view>
        @if(count($projects) < 1)
            <div class="row py-5">
                <div class="col-12 py-5">
                    <x-no-data></x-no-data>
                </div>
            </div>
        @else
            <x-project-card icon="ellipsis-v" routeEdit="projects.edit" routeShow="projects.show"
                         routeDestroy="projects.destroy" :projects="$projects"></x-project-card>
        @endif
    </div>
    <x-floating-button route="projects.create" icon="plus"></x-floating-button>
@endsection
