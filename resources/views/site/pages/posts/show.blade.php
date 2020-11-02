@extends('site.layouts.main')

@section('content')
    <section>
        <x-header-back icon="blog-outline.svg" title="Blog" hideHeader="true"></x-header-back>
    </section>
    <x-video-modal></x-video-modal>

    <main class="mt-5 pt-5">
        <div class="container">
            <section class="mt-4">
                <div class="row">
                    <div class="col-md-8 mb-4">
                        <div class="card mb-4 wow fadeIn">
                            <img src="{{asset("storage/posts/{$post->id}.jpg")}}" class="img-fluid rounded" alt="">
                        </div>
                        <div class="card mb-4 wow fadeIn">
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
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card primary-bg mb-4 wow fadeIn">
                            <div class="card-body text-white text-center">
                                <h5 class="mb-4"><strong>Faça a diferença com a Lumen Solar</strong></h5>
                                <p>Aproveite este conteúdo e veja também este vídeo para entender melhor sobre o sistema de energia solar fotovoltaica</p>
                                <button id="open-modal" data-toggle="modal" data-target="#video-modal" class="btn white text-warning"><i class="fas fa-play mr-1"></i> Assistir video</button>
                            </div>
                        </div>
                        <div class="card mb-4 wow fadeIn">
                            <div class="card-header">Últimos posts</div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    @foreach($lastPosts as $key => $lastPost)
                                        <li class="media {{$key ? 'mt-4' : ''}}">
                                            <img class="d-flex mr-3 rounded-circle" width="70" height="70"
                                                 src="{{asset("storage/posts/{$lastPost->id}.jpg")}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="{{route('post.show', $lastPost->id)}}">
                                                    <h6 class="mt-0 mb-1 font-weight-bold text-warning">{{$lastPost->title}}</h6>
                                                </a>
                                                {{$lastPost->summary}}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <x-footer></x-footer>
@endsection
