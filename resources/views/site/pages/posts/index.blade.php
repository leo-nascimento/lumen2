@extends('site.layouts.main')

@push('scripts')
    <script type="text/javascript" src="{{asset('js/posts.js')}}"></script>
@endpush

@section('content')
    <main class="mt-5 pt-5 container">
        <section class="card wow fadeIn"
                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

            <!-- Content -->
            <div class="card-body text-white text-center py-5 px-5 my-5">

                <h1 class="mb-4">
                    <strong>Learn Bootstrap 4 with MDB</strong>
                </h1>
                <p>
                    <strong>Best &amp; free guide of responsive web design</strong>
                </p>
                <p class="mb-4">
                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                        written
                        versions available. Create your own, stunning website.</strong>
                </p>
                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"
                   class="btn btn-outline-white btn-lg waves-effect waves-light">Start
                    free tutorial
                    <i class="fas fa-graduation-cap ml-2"></i>
                </a>

            </div>
            <!-- Content -->
        </section>
        <hr class="my-5">
        <section class="text-center">
            <div class="row mb-4 wow fadeIn" id="posts-data">
                @include('site.pages.posts.posts-paginate', $posts)
            </div>
        </section>

    </main>
@endsection
