<div class="row">
    <div class="col-12 col-md-8 d-flex align-items-center">
        <h2 class="mb-0 title-section"><i class="fas fa-{{$titleIcon}}"></i> {{$title}}</h2>
    </div>
    <div class="col-4 d-none d-md-block">
        <div class="d-flex justify-content-end">
            <a href="{{route($route)}}"><button class="btn btn-md {{$buttonColor}} text-white waves-effect"><i class="fas fa-{{$buttonIcon}}"></i> {{$buttonLabel}}</button></a>
        </div>
    </div>
</div>
