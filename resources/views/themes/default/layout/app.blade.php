<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $configData->name }}</title>

    <link rel="stylesheet" href="{{ asset('themes/default') }}/app/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('themes/default') }}/app/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('themes/default') }}/app/dist/app.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ Storage::url($configData->fav) }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/default') }}/assets/images/logo/favicon.png">
    @yield('style')

</head>

<body class="home-main header-fixed">

    <div class="wrapper">



        @include('themes.default.layout.header')

        @include('themes.default.component.loader')
        @yield('content')

        @include('themes.default.layout.footer')

        <a id="scroll-top"><span class="icon-arrow-top"></span></a>

    </div>
    <script src="{{ asset('themes/default') }}/app/js/jquery.min.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/jquery.easing.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/plugins.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/countto.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/app.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/count-down.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/aos.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('themes/default') }}/app/js/swiper.js"></script>
</body>

</html>
