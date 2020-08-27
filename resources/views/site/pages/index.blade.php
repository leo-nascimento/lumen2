@extends('site.layouts.main')
@section('content')
    <x-fluid-modal></x-fluid-modal>
    <x-video-modal></x-video-modal>

    <!-- Inicio do botão whatsapp -->
    <x-whatsapp></x-whatsapp>
    <!-- Fim do botão whatsapp -->

    <!-- Inicio da primeira seção, seção de slides. Para manutenção, acessar o componente -->
    <x-first-section></x-first-section>
    <!-- Fim da primeira seção -->

    <!-- Inicio de efeito de transição entre seções -->
    <div class="first-transition-normalY-reversedX h300"></div>
    <!-- Fim de efeito de transição entre seções -->

    <!-- Inicio da segunda seção, seção de cards de atualização. Para manutenção, acessar o componente -->
    <x-second-section></x-second-section>
    <!-- Fim da segunda seção -->

    <!-- Inicio da terceira seção, seção sobre a lumen. Para manutenção, acessar o componente-->
    <x-third-section></x-third-section>
    <!-- Fim da terceira seção -->

    <!-- Inicio da união de dois efeitos para a transição de seção -->
    <div class="second-transition-reversedY-normalX h300"></div>
    <div class="second-transition-normalY-normalX h300"></div>
    <!-- Fim de efeito -->

    <!-- Inicio da quarta seção, seção que apresenta o vídeo e as vantagens. Para manutenção, acessar o componente -->
    <x-fourth-section></x-fourth-section>
    <!-- Fim da quarta seção -->

    <section id="project-bg" class="d-none d-md-block mt-5 h600">
        <div class="container-fluid h-100 rgba-black-light">
            <div class="row text-white h-100">
                <div id="residence" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold lh45 f35">Projetos <br><span>Residenciais</span></h4>
                        <div id="residence-content">
                            <p class="pt-3">
                                Reduza gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a href="{{route('project', ['type' => 'residence'])}}" class="mx-0 btn btn-md black text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="comercial" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold lh45 f35">Projetos <br><span>Comerciais</span></h4>
                        <div id="comercial-content">
                            <p class="pt-3">
                                Reduza gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a data-toggle="tooltip" data-placement="bottom" title="Em breve"
                               class="mx-0 btn btn-md black text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="condominium" class="col-3 h-100 border-right d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold lh45 f35">Projetos em<br><span>Condominios</span></h4>
                        <div id="condominium-content">
                            <p class="pt-3">
                                Reduza gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a data-toggle="tooltip" data-placement="bottom" title="Em breve"
                               class="mx-0 btn btn-md black text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
                <div id="rural" class="col-3 h-100 d-flex align-items-end project-section">
                    <div class="py-3">
                        <h4 class="font-weight-bold lh45 f35">Projetos<br><span>Rurais</span></h4>
                        <div id="rural-content">
                            <p class="pt-3">
                                Reduza gastos com energia elétrica em sua residência através de nossas soluções
                                especialmente desenvolvidas para o seu consumo.
                            </p>
                            <a data-toggle="tooltip" data-placement="bottom" title="Em breve"
                               class="mx-0 btn btn-md black text-white">VER PROJETOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="budget-call" class="primary-bg pt-5">
        <div class="container p-5">
            <div class="row text-center text-md-left">
                <div class="col-md-8 col-12">
                    <h1 class="font-weight-bold text-white">Comece a economizar</h1>
                    <h4 class="text-white py-md-0 py-3">Não perca tempo, investa em qualidade de vida e reduza
                        custos</h4>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-center justify-content-md-end">
                    <div class="d-flex align-items-center">
                        <button class="btn white text-warning btn-rounded" data-toggle="tooltip" data-placement="bottom"
                                title="Em breve">Quero economizar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-transition" class="white" style="height: 250px;"></section>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h1>O que dizem nossos clientes</h1>
                        <hr class="primary-bg w-25" style="height: 3px;">
                        <h4 style="clear: both">Confira os depoimentos de quem já fez a diferença usando energia
                            solar</h4>
                    </div>
                    <div class="wrapper-carousel-fix">
                        <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade"
                             data-ride="carousel" data-interval="false">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active mt-5 py-5">
                                    <div class="testimonial text-center">
                                        <p><i class="fas fa-quote-left"></i>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                                            id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit
                                            amet, consectetur
                                            adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum
                                            inventore laboriosam labore
                                            sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <h4 class="font-weight-bold">Anna Deynah</h4>
                                        <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                                        <i class="fas fa-star text-warning"> </i>
                                        <i class="fas fa-star text-warning"> </i>
                                        <i class="fas fa-star text-warning"> </i>
                                        <i class="fas fa-star text-warning"> </i>
                                        <i class="fas fa-star-half-alt text-warning"> </i>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev left carousel-control" href="#carousel-example-1"
                               role="button"
                               data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next right carousel-control" href="#carousel-example-1"
                               role="button"
                               data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-thin-transition" style="height: 250px"></section>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="order-1 col-md-5 col-12">
                    <div class="pb-5">
                        <h2>Como funciona nossos serviços</h2>
                        <hr class="primary-bg w-25 float-left" style="height: 3px;">
                    </div>
                    <div class="row d-flex justify-content-around" style="clear: both;">
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-1" class="card card-rotating text-center">
                                    <div id="analysis"
                                         class="phases-front face front z-depth-1 rotate-btn bg-white h-100 d-flex align-items-center">
                                        <div class="card-body  " data-card="card-1">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/research.png')}}" class="rounded-circle"
                                                     height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Análise</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-1">
                                            <h4 class="font-weight-bold mb-0">Análise</h4>
                                            <hr>
                                            <p>
                                                Nessa primeira etapa nós analisamos o consumo de energia elétrica,
                                                o local de instalação e todos os elementos que vão interferir no
                                                projeto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-wrapper h-100">
                                <div id="card-1" class="card card-rotating text-center">
                                    <div id="analysis"
                                         class="phases-front face front z-depth-1 rotate-btn bg-white h-100 d-flex align-items-center">
                                        <div class="card-body  " data-card="card-1">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/research.png')}}" class="rounded-circle"
                                                     height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Projeto</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-1">
                                            <h4 class="font-weight-bold mb-0">Projeto</h4>
                                            <hr>
                                            <p>
                                                Nesta etapa, nós propomos a melhor solução para o cenário identificado.
                                                Sendo aceito, o projeto é submetido à concessionária de energia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around pt-4" style="clear: both;">
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-1" class="card card-rotating text-center">
                                    <div id="analysis"
                                         class="phases-front face front z-depth-1 rotate-btn bg-white h-100 d-flex align-items-center">
                                        <div class="card-body  " data-card="card-1">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/research.png')}}" class="rounded-circle"
                                                     height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Instalação</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-1">
                                            <h4 class="font-weight-bold mb-0">Instalação</h4>
                                            <hr>
                                            <p>
                                                Com o parecer de acesso concedido pela concessionária de energia,
                                                damos início à instalação dos equipamentos. A instalação é extremamente
                                                rápida e provoca alterações mínimas no local.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-wrapper">
                                <div id="card-1" class="card card-rotating text-center">
                                    <div id="analysis"
                                         class="phases-front face front z-depth-1 rotate-btn bg-white h-100 d-flex align-items-center">
                                        <div class="card-body  " data-card="card-1">
                                            <div class="p-3 d-flex justify-content-center">
                                                <img src="{{asset('img/icons/research.png')}}" class="rounded-circle"
                                                     height="80">
                                            </div>
                                            <p class="text-center font-weight-bold">Conexão</p>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="card-body rotate-btn phases-back" data-card="card-1">
                                            <h4 class="font-weight-bold mb-0">Conexão</h4>
                                            <hr>
                                            <p>
                                                Instalação finalizada, o último passo é solicitar que a concessionária
                                                de energia ligue o sistema junto à rede elétrica. Após a conexão com
                                                a rede, seu sistema começa a gerar energia limpa e economia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-2 col-md-7 col-12 mt-5 mt-md-0 pb-5 pb-md-0">
                    <div class="pb-5">
                        <h2>Principais dúvidas sobre energia solar</h2>
                        <hr class="primary-bg w-25 float-left" style="height: 3px;">
                    </div>
                    <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
                         aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading1">
                                <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1"
                                   aria-expanded="true"
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
                                        elétrica. Ao utilizar a forma térmica como fonte de energia, através de técnicas
                                        de arquitetura
                                        e construção, é possível uma maior iluminação natural aos ambientes. Essa fonte
                                        de energia
                                        permite também o uso de coletores solares, cujos têm a função de aquecer a água.
                                        O uso de fonte de energia na forma elétrica acontece devido ao efeito
                                        fotoelétrico. O
                                        efeito fotoelétrico ocorre a partir do aquecimento proporcionado pelo Sol, onde
                                        existe uma
                                        diferença de potencial entre as extremidades de dois materiais semicondutores
                                        unidos, o que
                                        gera corrente elétrica. Através do uso dos painéis fotovoltaicos, o processo
                                        fotoelétrico
                                        converte os fótons presentes na luz solar na forma de energia elétrica formados
                                        por células
                                        solares.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse2"
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
                                        Excluindo o custo inicial, um sistema de geração de energia solar fotovoltaica
                                        não tem
                                        outros custos, devido ao fato de que os painéis não necessitam de manutenção
                                        visto que o
                                        próprio vento e chuva desempenham esse papel. Com o avanço tecnológico, o
                                        retorno de
                                        investimento de um sistema fotovoltaico está caindo cada vez menor.
                                        Além do mais, a energia fotovoltaica é autossuficiente, portanto, é mais segura
                                        em
                                        termos de abastecimento para consumidores corporativos e para quem é prejudicado
                                        pela
                                        falta de energia. A energia fotovoltaica é uma opção barata para e eletrificação
                                        de grandes
                                        propriedades rurais formadas por sistemas elétricos dispersos. Uma outra
                                        aplicação é a
                                        eletrificação de comunidades remotas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse3"
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
                                        consumidores de energia podem, através da geração de energia renovável – energia
                                        solar,
                                        eólica, biogás e similares - obter abatimento em suas contas de luz através do
                                        compartilhamento da rede da concessionária de energia elétrica local. De todas
                                        as formas
                                        possíveis de geração de energia abordadas pela norma citada a energia solar é a
                                        que se mostra
                                        mais viável para os usuários, tanto para residências quanto para empresas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading4">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse4"
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
                                        concessionária e o abatimento nas contas de luz em forma de crédito energético.
                                        Todas as
                                        concessionárias cobram o custo de disponibilidade, que é uma tarifa mínima para
                                        fornecer
                                        energia ao consumidor. Essa tarifa, que impossibilita que as contas de luz sejam
                                        “zeradas”, é
                                        normatizada pela ANEEL e não tem como isentá-la. Com base nisso, todos
                                        nossos projetos subtraem o custo de disponibilidade para que o cliente, como
                                        terá que pagá-
                                        lo, de fato consuma a quantidade determinada para ele.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading5">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse5"
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
                                        Sim. Nesse caso é necessário a utilização de um sistema autônomo ou &quot;off-grid&quot;,
                                        onde
                                        o armazenamento de energia é feito por baterias. Esse sistema é recomendado para
                                        lugares
                                        onde não há rede elétrica, geralmente em zonas rurais.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading6">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse6"
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
                                        convencional. Porém, é necessário um estudo de projeto para realizar a
                                        instalação da
                                        quantidade de painéis adequada de modo que atenda a demanda de energia local.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg z-depth-1 mb-1" role="tab" id="heading7">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7"
                                   href="#collapse7"
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
                                        A eficiência de um sistema solar fotovoltaico depende, obviamente, do Sol.
                                        Todavia,
                                        mesmo em dias nublados, a geração de energia acontece pois há radiação solar
                                        mais que
                                        necessária. Para solucionar problemas em localidades com condições climáticas
                                        piores, o
                                        sistema é potencializado ao utilizar painéis solares de maior porte.
                                        Todas as regiões no Brasil apresentam ótimas condições climáticas para geração
                                        de
                                        energia solar fotovoltaica. Vale lembrar que a localidade de pior radiação solar
                                        no Brasil é
                                        superior à melhor localidade de radiação na Alemanha (potencial mundial em
                                        energia solar).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-thin-transition-left" style="height: 250px"></section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-heading h1 pt-4">Ainda está com dúvidas?</h2>
                    <p class="section-description pt-2 pb-4">
                        Não fique com dúvidas, entre em contato conosco estamos a disposição para explicar nosso sistema
                        para você. A Lumen é uma solução!
                    </p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 col-12 d-flex align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-header primary-bg accent-1">
                                <h4 class="mb-0"><i class="fas fa-envelope"></i> Entre em contato</h4>
                            </div>
                            <p>Informe seus dados abaixo que entraremos em contato</p>
                            <form action="{{ route('contact.send') }}" method="POST" class="ajax-form">
                                <div class="md-form">
                                    <input type="text" id="form-name" name="name" class="form-control">
                                    <label for="form-name">Seu nome</label>
                                </div>
                                <div class="md-form">
                                    <input type="email" id="form-email" name="email" class="form-control">
                                    <label for="form-email">Seu e-mail</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-Subject" name="subject" class="form-control">
                                    <label for="form-Subject">Assunto</label>
                                </div>
                                <div class="md-form">
                                    <textarea id="form-text" name="description" class="form-control md-textarea"
                                              rows="3"></textarea>
                                    <label for="form-text">Descrição</label>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn primary-bg btn-block text-white btn-submit"
                                            data-loader="Enviando...">ENVIAR CONTATO
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="h-100">
                        <div id='map' class="h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-thin-transition-left" style="height: 250px"></section>
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">A Lumen Solar é conteúdo</h1>
                    <hr class="primary-bg w-25" style="height: 3px;">
                    <div class="swiper-container swiper-blog py-4">
                        @if($posts->isNotEmpty())
                            <div class="swiper-wrapper">
                                @foreach($posts as $post)
                                    <div class="swiper-slide h-100">
                                        @include('site.pages.posts.post-card', $post)
                                    </div>
                                @endforeach
                                <div class="swiper-slide bg-transparent my-auto mx-auto">
                                    <div
                                        class="flex-column w-100 h-100 d-flex text-center align-content-center justify-content-center">
                                        <a href="{{route('post.index')}}"
                                           class="btn primary-bg btn text-white w-50 mx-auto">Ver todos</a>
                                    </div>
                                </div>
                                <div class="swiper-slide bg-transparent my-auto mx-auto"></div>
                            </div>
                        @else
                            <div class="swiper-wrapper mt-5">
                                <div class="swiper-slide bg-transparent my-auto w-100">
                                    <div
                                        class="flex-column position-relative w-100 h-100 d-flex align-content-center justify-content-center py-5">
                                        <img src="/img/icons/blog.png" alt="blog" width="80" class="mx-auto"/>
                                        <p class="text-muted mt-3">Nenhuma postagem encontrada</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inicio da seção de rodapé. Para manutenção, acessar o componente-->
    <x-footer></x-footer>
    <!-- Fim de seção -->
@endsection
