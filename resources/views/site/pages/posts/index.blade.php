@extends('site.layouts.main')

@push('scripts')
    <script type="text/javascript" src="{{asset('js/pages/posts.min.js')}}"></script>
@endpush

@section('content')
    <section id="blog-index">
        <x-header-back icon="blog-outline.svg" title="Blog"></x-header-back>
    </section>

    <main class="container">
        <hr class="my-4">
        <section class="text-center">
            <div class="row mb-4 wow fadeIn" id="posts-data">
                @include('site.pages.posts.posts-paginate', $posts)
            </div>
        </section>
    </main>

    <x-footer></x-footer>
@endsection
