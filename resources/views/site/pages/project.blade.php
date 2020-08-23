@extends('site.layouts.main')
@section('content')
    <x-fluid-modal></x-fluid-modal>
    <section class="{{$type}}">
        <div class="mask rgba-black-light">
            <div class="container h-100">
                <div class="row">
                    <nav class="navbar fixed-top navbar-dark navbar-expand-lg scrolling-navbar p-0" style="flex-flow: column">
                        <div class="container p-3">
                            <a class="navbar-brand d-md-none"  target="_blank">
                                <img src="{{asset('img/logos/logo-navbar.png')}}" height="35">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars text-dark"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item mx-auto px-2">
                                        <a class="nav-link bg-transparent text-center d-table" href="{{route('site')}}"><i class="fa fa-arrow-alt-circle-left text-warning"></i> Voltar</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item d-flex align-items-center px-3 py-md-2 py-0 mx-auto">
                                        <a href="mailto:contato@lumen.bsb.br" class="nav-link"><i class="fas fa-envelope text-warning"></i> contato@lumen.bsb.br</a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center px-3 py-md-2 py-0 mx-auto">
                                        <a href="tel:+5561983187150" class="nav-link"><i class="fas fa-phone text-warning"></i> (61) 9 8318-7150</a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center pl-3 py-md-2 py-0 mx-auto">
                                        <a class="text-white btn btn-sm primary-bg" data-toggle="modal" data-target="#budget"><i class="fa fa-calculator text-white"></i> Orçamento</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row d-flex align-items-end h400">
                    <div class="col-12 p-4">
                        <img height="60" src="{{asset('img/icons/real-estate.svg')}}">
                        <h1 class="font-weight-bold text-white f45 pt-3">Projetos <br>Residenciais</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-60">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-weight-bold mb-0">Entenda nossos projetos residenciais</h2>
                    <hr class="float-left primary-bg w-25 h3">
                    <p class="clear-float pt-5 text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-3">
            <div class="row">
                <div class="col-12 wow slideInRight">
                    <h2 class="font-weight-bold mb-0">Vantagens</h2>
                    <hr class="primary-bg w-25 float-left h3">
                    <p class="lead clear-float text-muted mt-4">
                        Conheça as vantagens da energia solar fotovoltaica e entenda porque essa fonte de energia está
                        em constante crescimento.
                    </p>
                    <div class="row">
                        <div class="col-12 px-0">
                            <ul class="nav md-pills nav-justified pills-rounded">
                                <li class="nav-item">
                                    <a class="z-depth-1 benefits nav-link white active p-4" data-toggle="tab" href="#bill" role="tab">
                                        <img class="img-fluid" width="60" src="{{asset('img/icons/bill-white.svg')}}">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="z-depth-1 nav-link benefits white p-4" data-toggle="tab" href="#money" role="tab">
                                        <img class="img-fluid" width="60" src="{{asset('img/icons/money-transfer.svg')}}">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab" href="#energy" role="tab">
                                        <img class="img-fluid" width="60" src="{{asset('img/icons/consumption.svg')}}">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab" href="#solar-panel" role="tab">
                                        <img class="img-fluid" width="60" src="{{asset('img/icons/solar-panel.svg')}}">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab" href="#loan" role="tab">
                                        <img class="img-fluid" width="60" src="{{asset('img/icons/loan.svg')}}">
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in show active" id="bill" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Redução de até 95% em sua conta de luz.</h5>
                                    <p class="text-justify text-muted font-small">
                                        O sistema fotovoltaico conectado à rede permite a redução de até 95% do que é
                                        pago atualmente em sua conta de luz. Todas as concessionárias cobram o custo
                                        de disponibilidade, que é uma tarifa mínima para fornecer energia ao consumidor.
                                        Essa tarifa, que impossibilita que as contas de luz sejam “zeradas”, é normatizada
                                        pela ANEEL e não tem como isentá-la. Ainda assim, o solar será um excelente
                                        investimento, pois todos nossos projetos subtraem o custo de disponibilidade
                                        para que o cliente, como terá que pagá-lo, de fato consuma-o.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="money" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Ótimo investimento com elevado retorno.</h5>
                                    <p class="text-justify text-muted font-small">
                                        Um investimento em energia solar tem o seu retorno, em média, entre 3 e 6 anos.
                                        Levando em conta que os painéis têm vida útil e rendimento garantidos por 25 anos,
                                        é fácil notar que é um excelente investimento! Após o retorno do sistema a energia
                                        consumida será de graça! Comparando com outros investimentos, como poupança, renda
                                        fixa ou CDI, a energia solar mostra-se até 6 vezes mais rentável.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="energy" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Sua conta de luz blindada contra a inflação energética.</h5>
                                    <p class="text-justify text-muted font-small">
                                        Inseridos em um cenário de crise, as contas de luz têm sofrido aumento anual em
                                        virtude da inflação energética. O que tende a durar por anos! Com um sistema
                                        fotovoltaico você gera sua própria energia e blinda a sua conta de luz contra
                                        a inflação energética, ou seja, quanto maior o preço da energia, maiores os
                                        seus retornos!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="solar-panel" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Painéis com vida útil acima de 25 anos.</h5>
                                    <p class="text-justify text-muted font-small">
                                        Todos os painéis fotovoltaicos oferecidos por nós possuem garantia de 25 anos para
                                        eficiência de até 80% de sua potência original. Os equipamentos utilizados pela
                                        Lumen são todos certificados pelo INMETRO e de qualidade ímpar. Não utilizamos
                                        equipamentos de segunda linha nem equipamentos que não tenhamos confiança na marca.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="loan" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Valorização imediata do seu imóvel</h5>
                                    <p class="text-justify text-muted font-small">
                                        Uma pesquisa patrocinada pelo Departamento de Energia Americano mostra que os
                                        compradores estão dispostos a pagar mais por casas com painéis solares!
                                        Os pesquisadores descobriram que os compradores estavam dispostos a pagar um prêmio
                                        de US$ 15.000 a mais para uma casa com o sistema de energia solar fotovoltaica
                                        de tamanho médio (cerca de 3,6 kW), em comparação com uma casa semelhante sem
                                        um sistema de geração.
                                    </p>
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
                    <h2 class="font-weight-bold mb-0">Projetos realizados</h2>
                    <hr class="primary-bg w-25 float-left h3">

                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
@endsection
