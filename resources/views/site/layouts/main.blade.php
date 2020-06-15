<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumen Bsb</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb-pro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link href="{{ asset('css/_website.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Scripts -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/2fab56a2f0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7484297.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js'></script>
</head>
<body>
    @if(!Request::is('login'))
        <x-navbar></x-navbar>
    @endif
    @yield('content')
    <script src="{{ asset('js/website.js') }}"></script>
</body>
</html>

