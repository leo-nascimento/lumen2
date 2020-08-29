<div class="modal fade right" id="budget" tabindex="-1" role="dialog" aria-labelledby="budget" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-center w-100" id="myModalLabel">Faça seu orçamento</h5>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="" id="modal-buttons">
                    <div class="d-flex justify-content-center pb-4">
                        <img height="100" src="{{asset('img/icons/cost.svg')}}">
                    </div>
                    <p class="text-center pb-3">
                        A Lumen Solar está aqui para que você economize e ainda ajude o meio ambiente utilizando energia
                        limpa
                        e renovável. Conte como podemos ajudar.
                    </p>
                    <button id="form-button" class="btn btn-block primary-bg text-white"
                            onclick="changeModalContent('budget-form')">Quero um orçamento
                    </button>
                    <button class="mt-3 btn btn-block" onclick="changeModalContent('economy-form')">Quanto posso
                        economizar?
                    </button>
                </div>
                <div id="budget-form" class="d-none">
                    <form class="px-3 ajax-form" action="{{route('budget.store')}}"
                          enctype="multipart/form-data" method="post">
                        <h4 class="text-center">Preencha as informações abaixo</h4>
                        <div class="form-row mt-3">
                            <div class="col">
                                <input class="form-control" type="text" name="name" placeholder="Nome" required>
                                <div class="invalid-feedback">Por favor, nos informe seu nome</div>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" name="surname" required placeholder="Sobrenome">
                                <div class="invalid-feedback">Por favor, nos informe seu sobrenome</div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="form-control mt-3" type="email" name="email" placeholder="E-mail" required>
                            <div class="invalid-feedback">Por favor, nos informe seu E-mail</div>
                        </div>
                        <div class="input-group">
                            <input class="form-control mt-3 phone" type="tel" name="cellphone" placeholder="Celular" required>
                            <div class="invalid-feedback">Por favor, nos informe seu telefone</div>
                        </div>
                        <div class="input-group mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="document" id="document" required lang="pt">
                                <label class="custom-file-label text-left overflow-hidden" for="document">
                                    Anexe sua conta de luz</label>
                            </div>
                            <div class="invalid-feedback">Por favor, anexe sua conta de luz</div>
                        </div>
                        <button class="btn btn-block primary-bg text-white mt-3 btn-submit"
                                data-loader="Enviando orçamento...">Enviar
                        </button>
                        <button class="mt-3 btn btn-block" type="reset"
                                onclick="changeModalContent('budget-form', false)">Voltar ao ínicio
                        </button>
                    </form>
                </div>
                <div id="economy-form" class="d-none w-100">
                    <form class="px-3 ajax-form" action="{{route('calculate-economy')}}"
                          method="POST" id="economy-search">
                        <h6 class="text-muted text-center">Informe o seu consumo mensal ou o valor médio da sua conta</h6>
                        <div class="form-row mt-3">
                            <div class="col-12">
                                <input class="form-control mt-3" type="number" name="consumption"
                                       placeholder="Consumo Médio (kWh)" required>
                                <div class="invalid-feedback">Por favor, informe o consumo médio do local</div>
                            </div>
                            <div class="col-12">
                                <input class="form-control mt-3 money" type="text" name="bill_price"
                                       placeholder="Preço Médio Conta Residencial" required>
                                <div class="invalid-feedback">Por favor, informe o preço médio de sua conta</div>
                            </div>
                        </div>
                        <button class="btn btn-block primary-bg text-white mt-3 btn-submit"
                                data-loader="Economizando...">Quanto posso economizar?
                        </button>
                        <button class="mt-3 btn btn-block" type="reset"
                                onclick="changeModalContent('economy-form', false)">Voltar ao ínicio
                        </button>
                    </form>
                    <div id="economy-result" class="d-none align-content-center justify-content-center text-center">
                        <img src="/img/icons/money-result.svg" alt="money" width="74"/>
                        <p class="text-muted text-center my-3">Seu investimento será de:</p>
                        <h4 class="text-muted mb-4"></h4>
                        <div>
                            <button class="btn btn-block primary-bg text-white" id="budget-call-button">Solicitar orçamento detalhado</button>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-block" id="btn-economy-back">Refazer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
