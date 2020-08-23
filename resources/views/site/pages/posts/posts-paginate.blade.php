@foreach($posts as $post)
    <div class="col-4 mb-4">
        @include('site.pages.posts.post-card', $post)
    </div>
@endforeach
