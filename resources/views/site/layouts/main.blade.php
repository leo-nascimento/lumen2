<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lumen Bsb</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb-pro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="{{ asset('css/_website.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
    @if(!Request::is('login', 'project/*', 'posts', 'posts/*'))
        <x-navbar></x-navbar>
    @endif
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src="https://kit.fontawesome.com/2fab56a2f0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7484297.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAGpX9kUmODEkuO-4TOnIAefIWTPA9luk&libraries=&v=weekly" defer></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/website.js') }}"></script>
    @stack('scripts')
    {!! toastr()->render() !!}
</body>
</html>

