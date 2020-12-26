<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Cryptbids - Auction Your Unwanted Crypto') }}</title>

    {{-- Custom Links Scripts - Starts --}}
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/cryptbids/favicon.png') }}" sizes="192x192" />
    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="{{ asset('cryptic-template-assets/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cryptic-template-assets/fonts/cryptocoins.css') }}" rel="stylesheet">
    <!-- Simple line icons -->
    <link href="{{ asset('cryptic-template-assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Font awesome icons -->
    <link href="{{ asset('cryptic-template-assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{ asset('cryptic-template-assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('cryptic-template-assets/css/media.css') }}" rel="stylesheet">
    <link id="ui-current-skin" href="{{ asset('cryptic-template-assets/css/skin-colors/skin-yellow.css') }}"
        rel="stylesheet">
    <!-- Custom Font -->
    <link href="{{ asset('cryptic-template-assets/css/custom-fonts.css') }}" rel="stylesheet">

    {{-- Laravel Mix Imports --}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body id="register-page" class="nav-md all-pages data_background preloader-off developer-mode"
    data-background="cryptic-template-assets/images/background.png">
    {{-- Page Content Starts --}}
    @inertia
    {{-- Page Content Ends --}}

    <!-- JS SCRIPTS -->
    <script src="{{ asset('cryptic-template-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cryptic-template-assets/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('cryptic-template-assets/plugins/modernizr/modernizr.custom.js') }}"></script>
    <script src="{{ asset('cryptic-template-assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('cryptic-template-assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('cryptic-template-assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('cryptic-template-assets/js/preloader.min.js') }}"></script>
    <h1 style="display: none">designed and developed by <a href="https://zaions.com" target="_blank"
            title="zaions.com a group of projects, zaions.com is mainly web & apps services providing company, its main project is learn.zaions.com which a skills training providing website.">Zaions.com</a>
    </h1>
</body>

</html>
