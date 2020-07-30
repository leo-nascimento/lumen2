<div class="modal fade right" id="budget" tabindex="-1" role="dialog" aria-labelledby="budget" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-center w-100" id="myModalLabel">Faça seu orçamento</h5>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="" id="modal-buttons">
                    <div class="d-flex justify-content-center pb-4">
                        <img height="100" src="{{asset('img/icons/loan-house.svg')}}">
                    </div>
                    <p class="text-center pb-3">
                        A Lumen Solar está aqui para que você economize e ainda ajude o meio ambiente utilizando energia
                        limpa
                        e renovável. Conte como podemos ajudar.
                    </p>
                    <button id="form-button" class="btn btn-block primary-bg text-white"
                            onclick="changeModalContent('budget-form')">Quero um orçamento
                    </button>
                    <button class="mt-3 btn btn-block" onclick="changeModalContent('economy-form')">Quanto posso economizar?</button>
                </div>
                <div id="budget-form" class="d-none">
                    <form class="text-center px-3 ajax-form" action="{{route('budget.store')}}"
                          enctype="multipart/form-data" method="post">
                        <h4>Preencha as informações abaixo</h4>
                        <div class="form-row mt-3">
                            <div class="col">
                                <input class="form-control" type="text" name="name" placeholder="Nome">
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" name="surname" placeholder="Sobrenome">
                            </div>
                        </div>
                        <input class="form-control mt-3" type="email" name="email" placeholder="E-mail">
                        <input class="form-control mt-3" type="tel" name="cellphone" placeholder="Celular">
                        <div class="input-group mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="document" id="document" lang="pt">
                                <label class="custom-file-label text-left" for="document">Anexe sua conta de luz</label>
                            </div>
                        </div>
                        <button class="btn btn-block primary-bg text-white mt-3 btn-submit">Enviar</button>
                    </form>
                </div>
                <div id="economy-form" class="d-none">
                    <form class="text-center px-3 ajax-form" action="{{route('calculate-economy')}}"
                          method="POST">
                        <h5 class="text-muted">Informe as informações abaixo obter seu orçamento</h5>
                        <div class="form-row mt-3">
                            <div class="col-12">
                                <input class="form-control mt-3" type="number" name="consumption" placeholder="Consumo Médio (kWh)">
                            </div>
                            <div class="col-12">
                                <input class="form-control mt-3 money" type="text" name="bill_price" placeholder="Preço Médio Conta Residencial">
                            </div>
                        </div>
                        <p class="d-none mt-3" id="economy-result"></p>
                        <button class="btn btn-block primary-bg text-white mt-3 btn-submit">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
