<nav class="navbar fixed-top navbar-dark navbar-expand-lg scrolling-navbar">
    <div class="container-fluid">
        <a class="navbar-brand"  target="_blank">
            <img src="{{asset('img/logos/logo-navbar-white.png')}}" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active px-2">
                    <a class="nav-link bg-transparent" href="#">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">A Lumen</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Nossos serviços</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Projetos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Sistema</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons mt-1">
                <li class="nav-item">
                    <a class="btn-sm primary-bg btn-rounded text-white py-2 px-4 animated pulse infinite"  data-toggle="modal" data-target="#budget">Solicitar Orçamento</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
