<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Cryptbids - Auction Your Unwanted Crypto') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- Custom Links Scripts --}}

    <!-- Custom CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="css/theme-css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/theme-css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-css/ionicons.min.css') }}" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/cryptbids/favicon.png') }}" sizes="192x192" />
    <!-- Online Fonts -->
    {{--
    <link
        href="https://fonts.googleapis.com/css5c6a.css?family=Merriweather:300,400,700,900|Montserrat:300,400,500,600,700,800"
        rel="stylesheet"> --}}
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link href="{{ asset('css/theme-css/custom-css.css') }}" rel="stylesheet">
    @yield('page-styles')
</head>

<body>
    <!-- LOADER -->
    {{-- <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div> --}}

    <!-- Wrap -->
    <div id="wrap">
        {{-- Page Content Starts --}}
        @inertia
        {{-- Page Content Ends --}}
    </div>

    {{-- Custom Links & Scripts --}}

    <script src="{{ asset('js/theme-js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/theme-js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/theme-js/jquery.magnific-popup.min.js') }}"></script> --}}
    <script src="{{ asset('js/theme-js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/pages-js/home-page.js') }}"></script>
    --}}
    {{-- <script src="{{ asset('js/theme-js/particles.min.js') }}"></script>
    --}}
    @yield('page-scripts')
    <h1 style="display: none">designed and developed by <a href="https://zaions.com" target="_blank"
            title="zaions.com a group of projects, zaions.com is mainly web & apps services providing company, its main project is learn.zaions.com which a skills training providing website.">Zaions.com</a>
    </h1>
</body>

</html>
