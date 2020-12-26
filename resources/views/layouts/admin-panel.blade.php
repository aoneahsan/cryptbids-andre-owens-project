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

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
        {{-- Page Content Starts --}}
        @inertia
        {{-- Page Content Ends --}}
    <h1 style="display: none">designed and developed by <a href="https://zaions.com" target="_blank"
            title="zaions.com a group of projects, zaions.com is mainly web & apps services providing company, its main project is learn.zaions.com which a skills training providing website.">Zaions.com</a>
    </h1>
</body>

</html>
