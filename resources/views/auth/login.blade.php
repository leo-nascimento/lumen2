@extends('site.layouts.main')
@section('content')
    <main class="bg-image h-100 d-flex align-items-center" style="background-image: url({{asset('img/backgrounds/home.jpg')}})">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-10">
                    <div class="card">
                        <h5 class="card-header bg-dark text-center py-4">
                            <img height="40" src="{{asset('img/logos/logo-navbar-white.png')}}">
                        </h5>
                        <div class="card-body px-4">
                            <form>
                                <div class="md-form mt-2">
                                    <input type="text" id="materialSubscriptionFormPasswords" class="form-control">
                                    <label for="materialSubscriptionFormPasswords">E-mail</label>
                                </div>
                                <div class="md-form">
                                    <input type="email" id="materialSubscriptionFormEmail" class="form-control">
                                    <label for="materialSubscriptionFormEmail">Senha</label>
                                </div>
                                <button class="btn primary-bg text-white btn-block z-depth-0 mt-4 mb-4 waves-effect" type="submit">Entrar</button>
                            </form>
                            <div class="d-flex justify-content-center">
                                <a class="text-dark" href="{{route('site')}}">Visitar o site</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
