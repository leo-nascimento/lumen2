<div class="card h-100 w-100 border">
    <div class="view overlay waves-effect" style="height: 200px">
        <img class="card-img-top h-100" src="{{asset("storage/posts/{$post->id}.jpg")}}" alt="Imagem do post">
    </div>
    <a class="btn-floating btn-action ml-auto mr-4 primary-bg" href="{{route('post.show', $post->id)}}">
        <i class="fas fa-chevron-right pl-1"></i></a>
    <div class="card-body border-top text-left py-2 px-3">
        <h5 class="card-title mt-3">{{$post->title}}</h5>
        <p class="text-muted">
            {{ \Illuminate\Support\Str::limit($post->summary, $limit = 60, $end = '...') }}
        </p>
    </div>
    <div class="rounded-bottom bg-dark text-center pt-3">
        <ul class="list-unstyled list-inline font-small">
            <li class="list-inline-item pr-2 white-text"><i class="fas fa-clock pr-1"></i>{{$post->date_post}}</li>
        </ul>
    </div>
</div>
