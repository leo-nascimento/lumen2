<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumen Bsb</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb-pro.css') }}" rel="stylesheet">
</head>
<body class="hidden-sn white-skin">
<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav p-0">
        <div class="navbar-toggler-right p-3 d-flex align-items-center d-none d-sm-block d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navigationBar" aria-expanded="false" aria-label="Navigation">
                <i class="fa-1x fas fa-bars"></i>
            </button>
            <div class="d-md-none">
                <div class="float-right pl-2 d-flex align-items-center">
                    <img src="{{asset('img/logos/logo-navbar.png')}}" height="25">
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-column z-depth-3" id="navbar">
            <div class="d-none d-md-block w-100 ">
                <ul class="navbar-nav p-3">
                    <div class="breadcrumb-dn mr-auto d-flex align-items-center">
                        <img src="{{asset('img/logos/logo-navbar.png')}}" height="30">
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">
                            <i class="fas fa-power-off"></i> <span class="clearfix d-none d-sm-inline-block"> Sair</span></a>
                    </li>
                </ul>
            </div>
            <!-- Caso haja mais modulos posteriormente substitui nav md-tabs por navbar-nav -->
            <ul class="mx-0 nav md-tabs bg-white z-depth-0 w-100 border-top px-3 py-2">
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="{{route('site')}}">
                        <i class="fas fa-home"></i><span class="pl-2">Inicio</span>
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('posts.index')}}" class="{{ request()->routeIs('posts.*') ? 'active' : ''}} nav-link  waves-effect">
                        <i class="fas fa-blog"></i><span class="pl-2">Blog</span>
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('projects.index')}}" class="{{ request()->routeIs('projects.*') ? 'active' : ''}} nav-link  waves-effect">
                        <i class="fas fa-tasks"></i><span class="pl-2">Projetos</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class="mt-md-5 mt-0">
    @yield('content')
</main>

<!-- Scripts -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('js/pages/admin.min.js') }}"></script>

@yield('pageScripts')
{!! toastr()->render() !!}
</body>
</html>
