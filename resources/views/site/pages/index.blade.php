@extends('site.layouts.main')
@section('content')
    <x-fluid-modal></x-fluid-modal>
    <x-video-modal></x-video-modal>
    <a target="_blank" href="https://wa.me/5562999445440?text=Agende%20uma%20consulta" class="whatsapp-floating btn-floating btn-lg waves-effect waves-light">
        <i class="fab fa-2x fa-whatsapp whatsapp-icon" aria-hidden="true"></i>
    </a>
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view slide-bg" id="first-slide">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="white-text wow fadeIn">
                            <div class="container text-md-left text-center animated slideInLeft">
                                <h1 class="mb-4"><strong><span class="slide-title">Reduza até <span class="primary-text">95%</span></span><br><span class="slide-text">a sua conta de luz</span> </strong></h1>
                                <p class="lead"><strong>Tenha acesso a energia renovável e sustentável</strong></p>
                                <p class="mb-4 lead d-none d-md-block">
                                    Não perca tempo solicite seu orçamento e confira tudo que o sistema de energia solar pode
                                    lhe gerar de econômia. Repense e em pouco tempo recupere o investimento.
                                </p>
                                <a target="_blank" class="mx-0 btn btn-outline-white rounded btn-md more-btn" data-toggle="tooltip" data-placement="bottom"
                                   title="Em Breve">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view slide-bg" id="second-slide">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="white-text wow fadeIn">
                            <div class="container text-md-left text-center animated slideInLeft">
                                <h1 class="mb-4"><strong><span class="slide-title">Use energia <span class="primary-text">limpa,</span></span><br><span class="slide-text">sustentável e renovável</span> </strong></h1>
                                <p class="lead"><strong>Economize enquanto ajuda o meio ambiente</strong></p>
                                <p class="mb-4 lead d-none d-md-block">
                                    Não perca tempo solicite seu orçamento e confira tudo que o sistema de energia solar pode
                                    lhe gerar de econômia. Repense e em pouco tempo recupere o investimento.
                                </p>
                                <a target="_blank" class="mx-0 btn btn-outline-white rounded btn-md more-btn" data-toggle="tooltip" data-placement="bottom"
                                   title="Em Breve">Saiba mais</a>
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
            <div class="row animated slideInUp">
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
                    <div class="wow zoomIn">
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
                        <div class="col-12 wow slideInUp">
                            <img src="{{asset('img/photos/1.jpg')}}" class="img-fluid rounded z-depth-1 pic">
                        </div>
                        <div class="col-12 py-4 wow slideInUp">
                            <img src="{{asset('img/photos/2.jpg')}}" class="img-fluid rounded z-depth-1 pic">
                        </div>
                        <div class="col-12 wow slideInUp">
                            <img src="{{asset('img/photos/3.jpg')}}" class="img-fluid rounded z-depth-1 pic">
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
                    <div class="row py-5 wow bounceIn">
                        <div class="col-12 text-center">
                            <h1 class="text-white font-weight-bold">Conheça mais sobre a energia solar fotovoltaica</h1>
                            <h3 class="text-white py-2">Entenda como funciona o sistema e sua instalação, basta assistir nosso vídeo</h3>
                            <button id="open-modal" class="btn btn-rounded primary-bg text-white" data-toggle="modal" data-target="#video-modal">Assistir video</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-2 bg-light">
        <div class="container py-md-3 py-1">
            <div class="row py-5">
                <div class="col-12 col-md-6 d-flex align-items-center order-2 order-md-1 wow slideInLeft">
                    <div class="pt-5 mt-2 mt-md-0 pt-md-0">
                        <img src="{{asset('img/backgrounds/7.jpg')}}" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <div class="wow fadeInUp">
                        <h2 class="font-weight-bold" style="line-height: 50px">Conheça os serviços da <span style="letter-spacing: 2px; font-size: 53px"><br>Lumen Solar</span></h2>
                        <hr class="primary-bg w-25 float-left" style="height: 3px;">
                        <p class="pt-2 text-muted" style="clear: both">
                            Entenda toda as etapas que executamos quando você contrata nossos serviços. Prezamos pela qualidade
                            e eficiência do sistema garantido a economia que você precisa.
                        </p>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6 col-12 wow slideInLeft">
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
                        <div class="col-md-6 col-12 pt-3 pt-md-0 wow slideInRight">
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
                    <div class="row pt-md-3 pt-0">
                        <div class="col-md-6 col-12 pt-md-0 pt-3 wow slideInLeft">
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
                        <div class="col-md-6 col-12 pt-md-0 pt-3 wow slideInRight">
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
    <section id="project-bg" class="d-none d-md-block" style="height: 600px;">
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
    <section id="budget-call" class="black">
        <div class="container p-5">
            <div class="row text-center text-md-left">
                <div class="col-md-8 col-12">
                    <h1 class="font-weight-bold text-white">Comece a economizar</h1>
                    <h4 class="text-white py-md-0 py-3">Não perca tempo, investa em qualidade de vida e reduza custos</h4>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-center justify-content-md-end">
                    <div class="d-flex align-items-center">
                        <button class="btn primary-bg text-white btn-rounded" data-toggle="modal" data-target="#budget">Quero economizar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="depoiments-bg">
        <div class="mask rgba-black-light">
            <div class="container-fluid p-md-5 px-md-0 px-3 pt-5">
                <div class="row py-md-5 py-0 d-flex justify-content-between">
                    <div class="order-1 col-md-4 col-12 my-auto">
                        <div class="text-center pb-md-5 pb-3">
                            <h1 class="font-weight-bold text-white">Nossos clientes</h1>
                            <h4 class="text-white pt-2">Faça como nossos clientes e comece a economizar na sua conta de luz</h4>
                        </div>
                        <div class="swiper-container swiper-depoiments py-md-3 py-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg-transparent">
                                    <div class="card testimonial-card">
                                        <div class="card-up black"></div>
                                        <div class="avatar mx-auto white">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="font-weight-bold mb-4">John Doe</h4>
                                            <hr>
                                            <p class="dark-grey-text mt-4">
                                                <i class="fas fa-quote-left pr-2"></i>
                                                Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                                                Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide bg-transparent">
                                    <div class="card testimonial-card">
                                        <div class="card-up black"></div>
                                        <div class="avatar mx-auto white">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="font-weight-bold mb-4">John Doe</h4>
                                            <hr>
                                            <p class="dark-grey-text mt-4">
                                                <i class="fas fa-quote-left pr-2"></i>
                                                Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide bg-transparent">
                                    <div class="card testimonial-card">
                                        <div class="card-up black" ></div>
                                        <div class="avatar mx-auto white">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="font-weight-bold mb-4">John Doe</h4>
                                            <hr>
                                            <p class="dark-grey-text mt-4">
                                                <i class="fas fa-quote-left pr-2"></i>
                                                Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide bg-transparent">
                                    <div class="card testimonial-card">
                                        <div class="card-up black"></div>
                                        <div class="avatar mx-auto white">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="font-weight-bold mb-4">John Doe</h4>
                                            <hr>
                                            <p class="dark-grey-text mt-4">
                                                <i class="fas fa-quote-left pr-2"></i>
                                                Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="order-2 col-md-7 col-12 mt-5 mt-md-0 pb-5 pb-md-0">
                        <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
                             aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading1">
                                    <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true"
                                       aria-controls="collapse1">
                                        <h5 class="mb-0 text-white font-thin">
                                            Qual a diferença entre energia fotovoltaica e aquecimento solar?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            O uso dos raios solares como fonte de energia pode ocorrer de forma térmica ou
                                            elétrica. Ao utilizar a forma térmica como fonte de energia, através de técnicas de arquitetura
                                            e construção, é possível uma maior iluminação natural aos ambientes. Essa fonte de energia
                                            permite também o uso de coletores solares, cujos têm a função de aquecer a água.
                                            O uso de fonte de energia na forma elétrica acontece devido ao efeito fotoelétrico. O
                                            efeito fotoelétrico ocorre a partir do aquecimento proporcionado pelo Sol, onde existe uma
                                            diferença de potencial entre as extremidades de dois materiais semicondutores unidos, o que
                                            gera corrente elétrica. Através do uso dos painéis fotovoltaicos, o processo fotoelétrico
                                            converte os fótons presentes na luz solar na forma de energia elétrica formados por células
                                            solares.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2"
                                       aria-expanded="false" aria-controls="collapse2">
                                        <h5 class="mb-0 white-text font-thin">
                                            Quais são as vantagens financeiras da energia solar fotovoltaica?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            Excluindo o custo inicial, um sistema de geração de energia solar fotovoltaica não tem
                                            outros custos, devido ao fato de que os painéis não necessitam de manutenção visto que o
                                            próprio vento e chuva desempenham esse papel. Com o avanço tecnológico, o retorno de
                                            investimento de um sistema fotovoltaico está caindo cada vez menor.
                                            Além do mais, a energia fotovoltaica é autossuficiente, portanto, é mais segura em
                                            termos de abastecimento para consumidores corporativos e para quem é prejudicado pela
                                            falta de energia. A energia fotovoltaica é uma opção barata para e eletrificação de grandes
                                            propriedades rurais formadas por sistemas elétricos dispersos. Uma outra aplicação é a
                                            eletrificação de comunidades remotas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3"
                                       aria-expanded="false" aria-controls="collapse3">
                                        <h5 class="mb-0 white-text font-thin">
                                            Posso instalar um sistema fotovoltaico em minha casa/empresa?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            Sim. Desde 2012, por meio da resolução normativa RN 482/2012 da ANEEL,
                                            consumidores de energia podem, através da geração de energia renovável – energia solar,
                                            eólica, biogás e similares - obter abatimento em suas contas de luz através do
                                            compartilhamento da rede da concessionária de energia elétrica local. De todas as formas
                                            possíveis de geração de energia abordadas pela norma citada a energia solar é a que se mostra
                                            mais viável para os usuários, tanto para residências quanto para empresas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading4">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse4"
                                       aria-expanded="false" aria-controls="collapse4">
                                        <h5 class="mb-0 white-text font-thin">
                                            Com um sistema solar consigo &quot;zerar&quot; minha conta de luz?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            O sistema fotovoltaico conectado à rede permite a entrega de energia gerada à
                                            concessionária e o abatimento nas contas de luz em forma de crédito energético. Todas as
                                            concessionárias cobram o custo de disponibilidade, que é uma tarifa mínima para fornecer
                                            energia ao consumidor. Essa tarifa, que impossibilita que as contas de luz sejam “zeradas”, é
                                            normatizada pela ANEEL e não tem como isentá-la. Com base nisso, todos
                                            nossos projetos subtraem o custo de disponibilidade para que o cliente, como terá que pagá-
                                            lo, de fato consuma a quantidade determinada para ele.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading5">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse5"
                                       aria-expanded="false" aria-controls="collapse5">
                                        <h5 class="mb-0 white-text font-thin">
                                            Consigo ser completamente independente da rede elétrica tendo um sistema solar?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            Sim. Nesse caso é necessário a utilização de um sistema autônomo ou &quot;off-grid&quot;, onde
                                            o armazenamento de energia é feito por baterias. Esse sistema é recomendado para lugares
                                            onde não há rede elétrica, geralmente em zonas rurais.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading6">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse6"
                                       aria-expanded="false" aria-controls="collapse6">
                                        <h5 class="mb-0 white-text font-thin">
                                            É possível utilizar todos os aparelhos comuns com energia solar fotovoltaica?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            Sim, a energia solar fotovoltaica tem os mesmos usos que a energia elétrica
                                            convencional. Porém, é necessário um estudo de projeto para realizar a instalação da
                                            quantidade de painéis adequada de modo que atenda a demanda de energia local.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading7">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse7"
                                       aria-expanded="false" aria-controls="collapse7">
                                        <h5 class="mb-0 white-text font-thin">
                                            Com a energia fotovoltaica, é possivel apagão em dias nublados ou a
                                            noite?
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7"
                                     data-parent="#accordionEx7">
                                    <div class="card-body mb-1 bg-white text-dark z-depth-1">
                                        <p class="mb-0">
                                            A eficiência de um sistema solar fotovoltaico depende, obviamente, do Sol. Todavia,
                                            mesmo em dias nublados, a geração de energia acontece pois há radiação solar mais que
                                            necessária. Para solucionar problemas em localidades com condições climáticas piores, o
                                            sistema é potencializado ao utilizar painéis solares de maior porte.
                                            Todas as regiões no Brasil apresentam ótimas condições climáticas para geração de
                                            energia solar fotovoltaica. Vale lembrar que a localidade de pior radiação solar no Brasil é
                                            superior à melhor localidade de radiação na Alemanha (potencial mundial em energia solar).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>A Lumen Solar conectando você</h1>
                    <hr class="primary-bg w-50 float-left" style="height: 3px;">
                    <div style="clear: both; margin-top: 70px;">
                        <div class="swiper-container swiper-blog">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card text-left">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                            <a><div class="mask rgba-white-slight"></div></a>
                                        </div>
                                        <a class="btn-floating btn-action ml-auto mr-4 primary-bg">
                                            <i class="fas fa-chevron-right pl-1"></i></a>
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <hr>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's
                                                content.
                                            </p>
                                        </div>
                                        <div class="rounded-bottom black text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015 às 15:30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-left">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                            <a><div class="mask rgba-white-slight"></div></a>
                                        </div>
                                        <a class="btn-floating btn-action ml-auto mr-4 primary-bg">
                                            <i class="fas fa-chevron-right pl-1"></i></a>
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <hr>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's
                                                content.
                                            </p>
                                        </div>
                                        <div class="rounded-bottom black text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015 às 15:30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-left">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                            <a><div class="mask rgba-white-slight"></div></a>
                                        </div>
                                        <a class="btn-floating btn-action ml-auto mr-4 primary-bg">
                                            <i class="fas fa-chevron-right pl-1"></i></a>
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <hr>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's
                                                content.
                                            </p>
                                        </div>
                                        <div class="rounded-bottom black text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015 às 15:30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-left">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                            <a><div class="mask rgba-white-slight"></div></a>
                                        </div>
                                        <a class="btn-floating btn-action ml-auto mr-4 primary-bg">
                                            <i class="fas fa-chevron-right pl-1"></i></a>
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <hr>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's
                                                content.
                                            </p>
                                        </div>
                                        <div class="rounded-bottom black text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015 às 15:30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-left">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                            <a><div class="mask rgba-white-slight"></div></a>
                                        </div>
                                        <a class="btn-floating btn-action ml-auto mr-4 primary-bg">
                                            <i class="fas fa-chevron-right pl-1"></i></a>
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <hr>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's
                                                content.
                                            </p>
                                        </div>
                                        <div class="rounded-bottom black text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015 às 15:30</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide bg-transparent my-auto">
                                    <button class="btn primary-bg btn text-white">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-md-5 py-3" id="contact-bg">
        <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-heading h1 pt-4">Está com dúvidas ainda?</h2>
                        <p class="section-description pt-2 pb-4">
                            Não fique com dúvidas, entre em contato conosco estamos a disposição para explicar nosso sistema
                            para você. A Lumen é uma solução!
                        </p>
                    </div>
                </div>
                <div class="row py-md-5 py-3">
                    <div class="col-md-5 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-header primary-bg accent-1">
                                    <h3 class="mb-0"><i class="fas fa-envelope"></i> Entre em contato conosco</h3>
                                </div>
                                <p>Informe seus dados abaixo que entraremos em contato</p>
                                <div class="md-form">
                                    <input type="text" id="form-name" class="form-control">
                                    <label for="form-name">Seu nome</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-email" class="form-control">
                                    <label for="form-email">Seu e-mail</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-Subject" class="form-control">
                                    <label for="form-Subject">Assunto</label>
                                </div>
                                <div class="md-form">
                                    <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-text">Descrição</label>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn primary-bg btn-block text-white">ENVIAR CONTATO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div id='map' class="h-100"></div>
                        <script>
                            mapboxgl.accessToken = 'pk.eyJ1IjoicmFmYWVsY2FycGFyYSIsImEiOiJja2JiMXd3NXgwMDVsMnVrMjd4dXZ4MHZlIn0.2yO-yEhYuLUcTMJVfKR_Jg';
                            var map = new mapboxgl.Map({
                                container: 'map',
                                style: 'mapbox://styles/mapbox/dark-v10',
                                center: [-47.9304321, -15.8660905],
                                zoom: 12.15
                            });

                            var marker = new mapboxgl.Marker()
                                .setLngLat([-47.9304321, -15.8660905])
                                .addTo(map);

                            map.addControl(new mapboxgl.NavigationControl());
                        </script>
                    </div>
                </div>
            </div>
    </section>
    <section id="footer">
        <footer class="page-footer font-small" style="background-color: rgba(0,0,0,0.9)">
            <div class="primary-bg">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-4 text-center text-md-left mb-4 mb-md-0">
                            <h5 class="mb-0">Fique por dentro das novidades!</h5>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <a class="tw-ic">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g white-text mr-4"> </i>
                            </a>
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <a class="ins-ic">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img class="img-fluid " src="{{asset('img/logos/logo-navbar-white.png')}}">
                        <p class="mt-4">
                            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contato</h6>
                        <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Páginas</h6>
                        <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><a href="#!">MDBootstrap</a></p>
                        <p><a href="#!">MDWordPress</a></p>
                        <p><a href="#!">BrandFlow</a></p>
                        <p><a href="#!">Bootstrap Angular</a></p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 d-none d-md-block">
                        <h6 class="text-uppercase font-weight-bold">Newsletter</h6>
                        <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            Subscribe to our newsletter!
                            Stay always in touch!
                        </p>
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Medium input">
                            </div>
                            <button class="btn btn-md primary-bg text-white btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> rafaelcparanhos.com</a>
            </div>
        </footer>
    </section>
@endsection
