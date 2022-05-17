<div class="row py-4">
    @foreach($projects as $project)
        <div class="col-12 col-md-3 pb-4">
            <div class="card h-100">
                <div class="view overlay waves-effect" style="height: 200px">
                    <img class="card-img-top h-100" src="{{$project->getImage()}}"
                         alt="Imagem do projeto">
                </div>
                <a class="btn-floating btn-action ml-auto mr-4 bg-dark dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-{{$icon}} pl-1"></i></a>
                <div class="dropdown-menu">
                    <a href="{{route($routeEdit, $project->id)}}" class="dropdown-item" href="#">Editar</a>
                    <a href="{{route($routeDestroy, $project->id)}}" class="dropdown-item" href="#">Deletar</a>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title mt-3">{{$project->resume}}</h5>
                    <p class="card-text">{{$project->client}}</p>
                </div>
                <div class="rounded-bottom bg-dark text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="fas fa-clock pr-1"></i>{{$project->created_at->format('d/m/Y H:m')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
