@foreach($posts as $post)
    <div class="col-md-4 col-12 mb-4">
        @include('site.pages.posts.post-card', $post)
    </div>
@endforeach
