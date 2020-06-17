<nav class="navbar fixed-top navbar-dark navbar-expand-lg scrolling-navbar p-0" style="flex-flow: column">
    <div class="container-fluid black px-0 d-none d-md-block">
        <div class="row w-100">
            <div class="col-12 px-0 d-flex justify-content-end">
                <ul class="list-group list-group-horizontal">
                    <li class="nav-item d-flex align-items-center px-3 py-2">
                        <a class="nav-item text-white"><i class="fas fa-envelope text-warning"></i> contato@lumen.bsb.br</a>
                    </li>
                    <li class="nav-item d-flex align-items-center px-3 py-2">
                        <a class="nav-item text-white"><i class="fas fa-phone text-warning"></i> (61) 9 8318-7150</a>
                    </li>
                    <li class="nav-item d-flex align-items-center pl-3 py-2">
                        <a class="nav-item text-white btn btn-sm primary-bg" data-toggle="modal" data-target="#budget"><i class="fa fa-calculator text-white"></i> Orçamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid p-3">
        <a class="navbar-brand"  target="_blank">
            <img src="{{asset('img/logos/logo-navbar.png')}}" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars text-dark"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-auto active px-2">
                    <a class="nav-link bg-transparent text-center d-table" href="#">Inicio</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="#">A Lumen</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="#">Nossos serviços</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="#">Projetos</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="#">Sistema</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="#">Blog</a>
                </li>
                <li class="nav-item px-2 mx-auto">
                    <a class="nav-link text-center d-table" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
