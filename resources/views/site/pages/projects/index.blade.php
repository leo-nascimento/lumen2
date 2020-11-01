@extends('site.layouts.main')

@push('scripts')
    <script type="text/javascript" src="{{asset('js/pages/projects.min.js')}}"></script>
@endpush

@section('content')
    <x-fluid-modal></x-fluid-modal>
    <x-project-modal></x-project-modal>

    <!-- Inicio do botão whatsapp -->
    <x-whatsapp></x-whatsapp>
    <!-- Fim do botão whatsapp -->

    @switch($type)
        @case('residencial')
        @include('site.pages.projects.types.residence', ['type' => $type])
        @break
        @case('comercial')
        @include('site.pages.projects.types.commercial', ['type' => $type])
        @break
        @case('rural')
        @include('site.pages.projects.types.rural', ['type' => $type])
        @break
        @case('condominio')
        @include('site.pages.projects.types.condominium', ['type' => $type])
        @break
    @endswitch

    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container swiper-projects">
                        <div class="swiper-wrapper h300">
                            @foreach($projects as $project)
                                <div class="swiper-slide swiper-projects-slide wow slideInRight">
                                    <div class="view overlay zoom w-100">
                                        <img id="image-project-{{$project->id}}"
                                            src="{{$project->getImage()}}"
                                            class="img-fluid rounded h-100 w-100" alt="smaple image">
                                        <div class="mask rgba-black-light flex-center">
                                            <div>
                                                <p class="white-text">{{$project->client}}</p>
                                                <button class="btn btn-sm text-warning white show-modal-project"
                                                        data-project="{{json_encode($project)}}">Ver detalhes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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
                            <div class="row">
                                <div class="col-7">
                                    <ul class="nav md-pills nav-justified pills-rounded">
                                        <li class="nav-item">
                                            <a class="z-depth-1 benefits nav-link white active p-4" data-toggle="tab"
                                               href="#bill" role="tab">
                                                <img class="img-fluid" width="50"
                                                     src="{{asset('img/icons/bill-white.svg')}}">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="z-depth-1 nav-link benefits white p-4" data-toggle="tab"
                                               href="#money" role="tab">
                                                <img class="img-fluid" width="50"
                                                     src="{{asset('img/icons/money-transfer.svg')}}">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab"
                                               href="#energy" role="tab">
                                                <img class="img-fluid" width="50"
                                                     src="{{asset('img/icons/consumption.svg')}}">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab"
                                               href="#solar-panel" role="tab">
                                                <img class="img-fluid" width="50"
                                                     src="{{asset('img/icons/solar-panel.svg')}}">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link z-depth-1 nav-link benefits white p-4" data-toggle="tab"
                                               href="#loan" role="tab">
                                                <img class="img-fluid" width="50" src="{{asset('img/icons/loan.svg')}}">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in show active" id="bill" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Redução de até 95% em sua conta de luz.</h5>
                                    <p class="text-justify text-muted">
                                        O sistema fotovoltaico conectado à rede permite a redução de até 95% do que é
                                        pago atualmente em sua conta de luz. Todas as concessionárias cobram o custo
                                        de disponibilidade, que é uma tarifa mínima para fornecer energia ao consumidor.
                                        Essa tarifa, que impossibilita que as contas de luz sejam “zeradas”, é
                                        normatizada
                                        pela ANEEL e não tem como isentá-la. Ainda assim, o solar será um excelente
                                        investimento, pois todos nossos projetos subtraem o custo de disponibilidade
                                        para que o cliente, como terá que pagá-lo, de fato consuma-o.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="money" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Ótimo investimento com elevado retorno.</h5>
                                    <p class="text-justify text-muted">
                                        Um investimento em energia solar tem o seu retorno, em média, entre 3 e 6 anos.
                                        Levando em conta que os painéis têm vida útil e rendimento garantidos por 25
                                        anos,
                                        é fácil notar que é um excelente investimento! Após o retorno do sistema a
                                        energia
                                        consumida será de graça! Comparando com outros investimentos, como poupança,
                                        renda
                                        fixa ou CDI, a energia solar mostra-se até 6 vezes mais rentável.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="energy" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Sua conta de luz blindada contra a inflação
                                        energética.</h5>
                                    <p class="text-justify text-muted">
                                        Inseridos em um cenário de crise, as contas de luz têm sofrido aumento anual em
                                        virtude da inflação energética. O que tende a durar por anos! Com um sistema
                                        fotovoltaico você gera sua própria energia e blinda a sua conta de luz contra
                                        a inflação energética, ou seja, quanto maior o preço da energia, maiores os
                                        seus retornos!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="solar-panel" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Painéis com vida útil acima de 25 anos.</h5>
                                    <p class="text-justify text-muted">
                                        Todos os painéis fotovoltaicos oferecidos por nós possuem garantia de 25 anos
                                        para
                                        eficiência de até 80% de sua potência original. Os equipamentos utilizados pela
                                        Lumen são todos certificados pelo INMETRO e de qualidade ímpar. Não utilizamos
                                        equipamentos de segunda linha nem equipamentos que não tenhamos confiança na
                                        marca.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="loan" role="tabpanel">
                                    <h5 class="font-weight-bold pb-3">Valorização imediata do seu imóvel</h5>
                                    <p class="text-justify text-muted">
                                        Uma pesquisa patrocinada pelo Departamento de Energia Americano mostra que os
                                        compradores estão dispostos a pagar mais por casas com painéis solares!
                                        Os pesquisadores descobriram que os compradores estavam dispostos a pagar um
                                        prêmio
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
    <section id="section-thin-transition-full-left" style="height: 200px"></section>
    <section class="py-5 secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="text-white">Solicitar orçamento</h1>
                    <hr class="white w-25 float-left h3">
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn white text-warning" data-toggle="modal" data-target="#budget">
                            Quero economizar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
@endsection
