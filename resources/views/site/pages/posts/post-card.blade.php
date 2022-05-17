<div class="card h-100 w-100 border">
    <div class="view overlay waves-effect" style="height: 200px">
        <img class="card-img-top h-100" src="{{asset("storage/posts/{$post->id}.jpg")}}" alt="Imagem do post">
    </div>
    <a class="btn-floating btn-action ml-auto mr-4 primary-bg" href="{{route('post.show', $post->id)}}">
        <i class="fas fa-chevron-right pl-1"></i></a>
    <div class="card-body border-top text-left py-2 px-3">
        <h6 class="card-title mt-3">{{$post->title}}</h6>
        <p class="text-muted font-small mb-0">
            {{ \Illuminate\Support\Str::limit($post->summary, $limit = 60, $end = '...') }}
        </p>
        <p class="text-dark mb-0 py-2 mt-2"><i class="fas fa-clock pr-1"></i>{{$post->date_post}}</p>
    </div>
</div>
