<section id="footer">
    <footer class="page-footer font-small" style="background-color: rgba(255,255,255,0.8)">
        <div class="primary-bg">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-4 text-center text-md-left mb-4 mb-md-0">
                        <h5 class="mb-0">Nos siga nas nossas redes sociais</h5>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a class="fb-ic" href="https://www.youtube.com/channel/UCWUS0ECcbXJxEqQfmyKJYFQ/" target="_blank">
                            <i class="fab fa-youtube white-text mr-4"></i>
                        </a>
                        <a class="fb-ic" href="https://www.facebook.com/lumen.bsb/" target="_blank">
                            <i class="fab fa-facebook-f white-text mr-4"></i>
                        </a>
                        <a class="li-ic" href="https://www.linkedin.com/company/lumensolar/" target="_blank">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <a class="ins-ic" href="https://www.instagram.com/lumen.bsb/" target="_blank">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <div style="margin-top: -20px;">
                        <img class="img-fluid" src="{{asset('img/logos/logo-footer.png')}}">
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase font-weight-bold text-dark">Conheça também</h6>
                        <hr class="primary-bg accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    </div>
                    <div>
                        <a href="{{ url('http://www.lumenobras.com.br') }}" target="_blank">
                            <img class="img-fluid" src="{{asset('img/logos/logo-lumenobras.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold text-dark">Contato</h6>
                    <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-dark"><i class="fas fa-home mr-3 text-dark"></i> Setor de Hangares, Hangar 21 - Lago Sul, Brasília - DF</p>
                    <p class="text-dark"><i class="fas fa-envelope mr-3 text-dark"></i> contato@lumen.bsb.br</p>
                    <p class="text-dark"><i class="fa fa-whatsapp fa-lg mr-3 text-dark"></i> (61) 98318-7150</p>
                    <p class="text-dark"><i class="fas fa-phone mr-3 text-dark"></i> (61) 98318-7150</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-dark">Páginas</h6>
                    <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a class="text-dark" href="/login">Login</a></p>
                    <p><a class="text-dark" href="#!">Projetos</a></p>
                    <p><a class="text-dark" href="{{route('post.index')}}">Blog</a></p>
                    <p><a class="text-dark" href="{{route('site')}}">Inicio</a></p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 d-none d-md-block">
                    <h6 class="text-uppercase font-weight-bold text-dark">Newsletter</h6>
                    <hr class="primary-bg accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-dark">Receba as nossas novidades</p>
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Digite seu e-mail">
                        </div>
                        <button class="btn btn-md primary-bg text-white btn-block">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="footer-copyright py-3 bg-transparent text-dark">© 2020 Copyright:
                <a class="text-warning" href="http://www.rafaelcparanhos.com.br"> rafaelcparanhos.com</a>
            </div>
        </div>
    </footer>
</section>
