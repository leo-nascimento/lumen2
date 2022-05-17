@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid p-md-4 px-3 h-100">
        <x-title-view title="Listagem de posts" titleIcon="blog" buttonColor="primary-bg" buttonIcon="plus" buttonLabel="Novo" route="posts.create"></x-title-view>
        @if(count($posts) < 1)
            <div class="row py-5">
                <div class="col-12 py-5">
                    <x-no-data></x-no-data>
                </div>
            </div>
        @else
            <x-post-card icon="ellipsis-v" routeEdit="posts.edit" routeShow="posts.show" routeDestroy="posts.destroy" :posts="$posts"></x-post-card>
        @endif
    </div>
    <x-floating-button route="posts.create" icon="plus"></x-floating-button>
@endsection
