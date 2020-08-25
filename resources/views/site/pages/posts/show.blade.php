@extends('site.layouts.main')

@section('content')
    <section>
        <x-header-back icon="blog-outline.svg" title="Blog" hideHeader="true"></x-header-back>
    </section>

    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Post-->
            <section class="mt-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn">
                            <img src="{{asset("storage/posts/{$post->id}.jpg")}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body">
                                <p class="h5 my-4">{{$post->title}}</p>
                                <blockquote class="blockquote">
                                    <p class="mb-0">{{$post->summary}}</p>
                                    <footer class="blockquote-footer">
                                        <cite title="Source Title">{{$post->date_post}}</cite>
                                    </footer>
                                </blockquote>
                                <p class="h5 my-4">{!!$post->description!!}</p>
                            </div>
                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!--Card: Jumbotron-->
                        <div class="card blue-gradient mb-4 wow fadeIn">

                            <!-- Content -->
                            <div class="card-body text-white text-center">

                                <h4 class="mb-4">
                                    <strong>Learn Bootstrap 4 with MDB</strong>
                                </h4>
                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>
                                <p class="mb-4">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000
                                        users. Video
                                        and written versions available. Create your own, stunning website.</strong>
                                </p>
                            </div>
                            <!-- Content -->
                        </div>
                        <!--Card: Jumbotron-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <div class="card-header">Últimos posts</div>

                            <!--Card content-->
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    @foreach($lastPosts as $key => $lastPost)
                                        <li class="media {{$key ? 'mt-4' : ''}}">
                                            <img class="d-flex mr-3" width="70" height="70"
                                                 src="{{asset("storage/posts/{$lastPost->id}.jpg")}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="{{route('post.show', $lastPost->id)}}">
                                                    <h5 class="mt-0 mb-1 font-weight-bold">{{$lastPost->title}}</h5>
                                                </a>
                                                {{$lastPost->summary}}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Post-->
        </div>
    </main>
    <!--Main layout-->

    <x-footer></x-footer>
@endsection
