@extends('site.layouts.main')
@section('content')
    <x-fluid-modal></x-fluid-modal>
    <a target="_blank" href="https://wa.me/5562999445440?text=Agende%20uma%20consulta" class="whatsapp-floating btn-floating btn-lg waves-effect waves-light">
        <i class="fab fa-2x fa-whatsapp whatsapp-icon" aria-hidden="true"></i>
    </a>
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view slide-bg" id="first-slide">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="white-text wow fadeIn">
                            <div class="container text-md-left text-center">
                                <h1 class="mb-4"><strong><span class="slide-title">Reduza até <span class="primary-text">95%</span></span><br><span class="slide-text">a sua conta de luz</span> </strong></h1>
                                <p class="lead"><strong>Tenha acesso a energia renovável e sustentável</strong></p>
                                <p class="mb-4 lead d-none d-md-block">
                                    Não perca tempo solicite seu orçamento e confira tudo que o sistema de energia solar pode
                                    lhe gerar de econômia. Repense e em pouco tempo recupere o investimento.
                                </p>
                                <a target="_blank" class="mx-0 btn btn-outline-white rounded btn-md more-btn">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view slide-bg" id="second-slide">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="white-text wow fadeIn">
                            <div class="container text-md-left text-center">
                                <h1 class="mb-4"><strong><span class="slide-title">Use energia <span class="primary-text">limpa,</span></span><br><span class="slide-text">sustentável e renovável</span> </strong></h1>
                                <p class="lead"><strong>Economize enquanto ajuda o meio ambiente</strong></p>
                                <p class="mb-4 lead d-none d-md-block">
                                    Não perca tempo solicite seu orçamento e confira tudo que o sistema de energia solar pode
                                    lhe gerar de econômia. Repense e em pouco tempo recupere o investimento.
                                </p>
                                <a target="_blank" class="mx-0 btn btn-outline-white rounded btn-md more-btn">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="d-flex justify-content-center">
        <div class="container lumen-data">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="card pt-3 pb-0">
                        <div class="row px-3 pb-3">
                            <div class="col-4 d-flex align-items-center">
                                <img src="{{asset('img/icons/co2.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p class="lead mb-0 font-weight-bold" style="font-size: 20px;">100</p>
                                <p class="mb-0 text-muted">Economia em CO²</p>
                            </div>
                        </div>
                        <hr class="mb-0 mt-2 bg-dark" style="height: 3px;">
                    </div>
                </div>
                <div class="col-md-3 col-6 d-none d-md-block">
                    <div class="card pt-3 pb-0">
                        <div class="row px-3 pb-3">
                            <div class="col-4 d-flex align-items-center">
                                <img src="{{asset('img/icons/money.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p class="lead mb-0 font-weight-bold" style="font-size: 20px;">R$ 20.000,00</p>
                                <p class="mb-0 text-muted">Economia em reais</p>
                            </div>
                        </div>
                        <hr class="mb-0 mt-2 bg-dark" style="height: 3px;">
                    </div>
                </div>
                <div class="col-md-3 col-6 d-none d-md-block">
                    <div class="card pt-3 pb-0">
                        <div class="row px-3 pb-3">
                            <div class="col-4 d-flex align-items-center">
                                <img src="{{asset('img/icons/energy.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p class="lead mb-0 font-weight-bold" style="font-size: 20px;">135.722 kWp</p>
                                <p class="mb-0 text-muted">Energia gerada</p>
                            </div>
                        </div>
                        <hr class="mb-0 mt-2 bg-dark" style="height: 3px;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card pt-3 pb-0">
                        <div class="row px-3 pb-3">
                            <div class="col-4 d-flex align-items-center">
                                <img src="{{asset('img/icons/plates.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p class="lead mb-0 font-weight-bold" style="font-size: 20px;">100 mil</p>
                                <p class="mb-0 text-muted">Placas instaladas</p>
                            </div>
                        </div>
                        <hr class="mb-0 mt-2 bg-dark" style="height: 3px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-md-5 p-2">
        <div class="container py-5">
            <div class="row pt-5 d-flex justify-content-between">
                <div class="col-md-7 col-12 d-flex align-items-center">
                    <div>
                        <h2>A Lumen Solar</h2>
                        <hr class="primary-bg w-25 float-left" style="height: 3px;">
                        <h6 class="text-muted" style="clear: both">Economia e sustentabilidade é nosso lema</h6>
                        <div class="py-4">
                            <p class="lead text-justify">
                                Luz. A história do mundo pode ser contada pela história da luz. Milhões de anos atrás,
                                o ser humano assumiu o topo da cadeia alimentar quando conseguiu dominar o fogo. A partir
                                daí, o calor, a produção e a visão se adaptaram com a canalização de um elemento natural.
                                Milênios depois, a energia elétrica nos proporcionou mais uma revolução. Tudo que era bom,
                                chegou à beira da perfeição.
                            </p>
                            <p class="lead text-justify">
                                Hoje, estamos à porta de uma terceira grandiosa revolução da energia. Unimos a
                                natureza da primeira com a tecnologia da segunda para garantir uma terceira e perpétua fase.
                                Nos tornamos capazes de canalizar o Sol, mais garantida, limpa e rentável fonte de energia,
                                com o objetivo de um mundo mais sustentável ambiental, social e financeiramente.
                                No futuro, natureza, tecnologia e economia. No presente, Lumen Solar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('img/photos/1.jpg')}}" class="img-fluid rounded z-depth-1">
                        </div>
                        <div class="col-12 py-4">
                            <img src="{{asset('img/photos/1.jpg')}}" class="img-fluid rounded z-depth-1">
                        </div>
                        <div class="col-12">
                            <img src="{{asset('img/photos/1.jpg')}}" class="img-fluid rounded z-depth-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slide-bg" id="video">
            <div class="mask rgba-black-strong">
                <div class="container py-5">
                    <div class="row py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white font-weight-bold">Conheça mais sobre a energia solar fotovoltaica</h1>
                            <h3 class="text-white py-2">Entenda como funciona o sistema e sua instalação, basta assistir nosso vídeo</h3>
                            <button class="btn btn-rounded primary-bg text-white">Assistir video</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-2 bg-light">
        <div class="container py-3">
            <div class="row py-5">
                <div class="col-12 col-md-6 d-flex align-items-center order-2 order-md-1">
                    <div class="pt-5 mt-2 mt-md-0 pt-md-0">
                        <img src="{{asset('img/backgrounds/7.jpg')}}" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <h2 class="font-weight-bold" style="line-height: 50px">Conheça os serviços da <span style="letter-spacing: 2px; font-size: 53px"><br>Lumen Solar</span></h2>
                    <hr class="primary-bg w-25 float-left" style="height: 3px;">
                    <p class="pt-2 text-muted" style="clear: both">
                        Entenda toda as etapas que executamos quando você contrata nossos serviços. Prezamos pela qualidade
                        e eficiência do sistema garantido a economia que você precisa.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-1" class="card card-rotating text-center">
                                    <div class="face front z-depth-1 bg-white h-100 d-flex align-items-center">
                                        <div class="card-body rotate-btn phases-front" data-card="card-1">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/research.png')}}" class="rounded-circle" height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Análise de consumo</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-1">
                                            <h4 class="font-weight-bold mb-0">Análise</h4>
                                            <hr>
                                            <p>
                                                Nessa primeira etapa nós analisamos seus custos e consumos para que possamos
                                                identificar qual a melhor solução para o seu cenário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-2" class="card card-rotating text-center">
                                    <div class="face front z-depth-1 bg-white h-100 d-flex align-items-center">
                                        <div class="card-body rotate-btn phases-front" data-card="card-2">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/planning.png')}}" class="rounded-circle" height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Planejamento do cenário</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-2">
                                            <h4 class="font-weight-bold mb-0">Planejamento</h4>
                                            <hr>
                                            <p>
                                                Nessa primeira etapa nós analisamos seus custos e consumos para que possamos
                                                identificar qual a melhor solução para o seu cenário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-2" class="card card-rotating text-center">
                                    <div class="face front z-depth-1 bg-white h-100 d-flex align-items-center">
                                        <div class="card-body rotate-btn phases-front" data-card="card-2">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/power.png')}}" class="rounded-circle" height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Implantação do sistema</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-2">
                                            <h4 class="font-weight-bold mb-0">Implantação</h4>
                                            <hr>
                                            <p>
                                                Nessa primeira etapa nós analisamos seus custos e consumos para que possamos
                                                identificar qual a melhor solução para o seu cenário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-2" class="card card-rotating text-center">
                                    <div class="face front z-depth-1 bg-white h-100 d-flex align-items-center">
                                        <div class="card-body rotate-btn phases-front" data-card="card-2">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/energy.png')}}" class="rounded-circle" height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Conexão da rede eletrica</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-2">
                                            <h4 class="font-weight-bold mb-0">Conexão</h4>
                                            <hr>
                                            <p>
                                                Nessa primeira etapa nós analisamos seus custos e consumos para que possamos
                                                identificar qual a melhor solução para o seu cenário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-bg" style="height: 600px;">
        <div class="container-fluid h-100 rgba-black-strong">
            <div class="row text-white h-100">
                <div id="residence" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold" style="line-height: 45px; font-size: 35px;">Projetos <br><span>Residenciais</span></h4>
                        <div id="residence-content">
                            <p class="pt-3">
                                Reduza  gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a class="mx-0 btn btn-md bg-dark text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="comercial" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold" style="line-height: 45px; font-size: 35px;">Projetos <br><span>Comerciais</span></h4>
                        <div id="comercial-content">
                            <p class="pt-3">
                                Reduza  gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a class="mx-0 btn btn-md bg-dark text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="condominium" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold" style="line-height: 45px; font-size: 35px;">Projetos em<br><span>Condominios</span></h4>
                        <div id="condominium-content">
                            <p class="pt-3">
                                Reduza  gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a class="mx-0 btn btn-md bg-dark text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="rural" class="col-3 h-100 d-flex align-items-end project-section">
                    <div class="py-3">
                            <h4 class="font-weight-bold" style="line-height: 45px; font-size: 35px;">Projetos<br><span>Rurais</span></h4>
                        <div id="rural-content">
                            <p class="pt-3">
                                Reduza  gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a class="mx-0 btn btn-md bg-dark text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">

        </div>
    </section>
    <section class="px-0" id="footer">
        <footer class="page-footer font-small" style="background-color: rgba(0,0,0,0.9)">
            <div class="container-fluid px-5 text-center text-md-left">
                <div class="row p-md-5 py-5 d-flex align-items-center">
                    <div class="col-md-3">
                        <img class="img-fluid " src="{{asset('img/logos/logo-navbar-white.png')}}">
                        <p class="pt-4 text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        </p>
                        <div></div>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-5 col-12 mx-auto px-0">
                        <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Acessos</h6>
                        <ul class="list-group list-group-vertical">
                            <li class="list-group-item text-white bg-transparent links-footer">
                                <a href="#begin">Inicio</a>
                            </li>
                            <li class="list-group-item text-white bg-transparent links-footer">
                                <a href="#!">Cursos</a>
                            </li>
                            <li class="list-group-item text-white bg-transparent links-footer">
                                <a href="#!">Atendimento</a>
                            </li>
                            <li class="list-group-item text-white bg-transparent links-footer">
                                <a href="#!">Login</a>
                            </li>
                            <li class="list-group-item text-white bg-transparent links-footer">
                                <a href="https://renataintrovini.com.br/webmail" target="_blank">Webmail</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a target="_blank" href="https://rafaelcparanhos.com.br"> rafaelcparanhos.com.br</a>
            </div>
        </footer>
    </section>
@endsection
