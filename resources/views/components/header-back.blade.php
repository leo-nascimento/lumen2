<div class="mask rgba-black-light">
    <div class="container h-100">
        <div class="row">
            <nav class="navbar fixed-top navbar-dark navbar-expand-lg scrolling-navbar p-0" style="flex-flow: column">
                <div class="container p-3">
                    <a class="navbar-brand d-md-none" target="_blank">
                        <img src="{{asset('img/logos/logo-navbar.png')}}" height="35">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars text-dark"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item mx-auto px-2">
                                <a class="nav-link bg-transparent text-center d-table" href="{{route('site')}}">
                                    <i class="fa fa-arrow-alt-circle-left text-warning"></i> Voltar</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item d-flex align-items-center px-3 py-md-2 py-0 mx-auto">
                                <a href="mailto:contato@lumen.bsb.br" class="nav-link"><i
                                        class="fas fa-envelope text-warning"></i> contato@lumen.bsb.br</a>
                            </li>
                            <li class="nav-item d-flex align-items-center px-3 py-md-2 py-0 mx-auto">
                                <a href="tel:+5561983187150" class="nav-link"><i class="fas fa-phone text-warning"></i>
                                    (61) 9 8318-7150</a>
                            </li>
                            <li class="nav-item d-flex align-items-center pl-3 py-md-2 py-0 mx-auto">
                                <a class="text-white btn btn-sm primary-bg" data-toggle="modal" data-target="#budget"><i
                                        class="fa fa-calculator text-white"></i> Orçamento</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row d-flex align-items-end h400">
            <div class="col-12 p-4">
                <img height="60" src="{{asset("img/icons/{$icon}")}}">
                <h1 class="font-weight-bold text-white f45 pt-3">{{$title}}</h1>
            </div>
        </div>
    </div>
</div>
