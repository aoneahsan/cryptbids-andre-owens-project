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

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
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
    <!-- JavaScripts -->
    <script src="{{ asset('js/theme-js/modernizr.js') }}"></script>

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
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        <header class="sticky">
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="img-responsive" src="{{ asset('images/cryptbids/cryptbids-logo.png') }}" alt="">
                    </a>
                </div>
                <nav class="navbar ownmenu navbar-expand-lg">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav">
                            {{-- <li class="{{ request()->is('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li> --}}
                            {{-- add
                            "scroll" class for a scroll link, then #id to section where to scroll
                            --}}
                            {{-- <li
                                class="{{ request()->is('about-us') ? 'active' : '' }}"> <a
                                    href="{{ route('about-us') }}">About Us</a> </li>
                            <li class="{{ request()->is('faqs') ? 'active' : '' }}"> <a
                                    href="{{ route('faqs') }}">FAQs</a> </li>
                            <li class="{{ request()->is('fees') ? 'active' : '' }}"> <a
                                    href="{{ route('fees') }}">Fees</a> </li>
                            <li class="{{ request()->is('contact-us') ? 'active' : '' }}"> <a
                                    href="{{ route('contact-us') }}">Contact Us</a> </li>
                            --}}
                            <li class="scroll"><a href="#how-it-works">How it works</a> </li>
                            @auth
                                <li class="{{ request()->is('logout') ? 'active' : '' }}"> <a href="{{ route('logout') }}"
                                        class="btn btn-inverse py-2">Logout</a> </li>
                            @endauth
                            @guest
                                <li class="{{ request()->is('login') ? 'active' : '' }}"> <a
                                        href="{{ route('login') }}">Login</a> </li>
                                <li class="{{ request()->is('register') ? 'active' : '' }}"> <a
                                        href="{{ route('register') }}" class="btn btn-inverse py-2">Register</a> </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </header>
        {{-- Page Content Starts --}}
        {{ $slot }}
        {{-- Page Content Ends --}}
        <!-- Footer -->
        <footer id="contact">
            <div class="footer-sections">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 pl-0">
                            <div class="w-100 text-center text-md-left mt-n3 mb-4">
                                <img src="{{ asset('images/cryptbids/cryptbids-logo.png') }}"
                                    class="col-12 col-sm-10 pl-0 d-inline-block" />
                            </div>
                            <p class="color-white">Join a global community of people who have discovered their pathway
                                to
                                the crypto world with
                                Cryptbids.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h5 class="color-white mb-4">About Us</h5>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('about-us') ? 'active' : '' }}"
                                        href="{{ route('about-us') }}">About</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('career') ? 'active' : '' }}"
                                        href="{{ route('career') }}">Career</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h5 class="color-white mb-4">Services</h5>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('fees') ? 'active' : '' }}"
                                        href="{{ route('fees') }}">Fees</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('faqs') ? 'active' : '' }}"
                                        href="{{ route('faqs') }}">FAQs</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h5 class="color-white mb-4">Community</h5>
                            <ul class="socials">
                                <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#."><i class="fab fa-github"></i></a></li>
                                <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rights -->
            <div class="rights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>© {{ now()->year }} Cryptbids.com. All rights reserved</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="{{ request()->is('disclaimer') ? 'active' : '' }}"
                                href="{{ route('disclaimer') }}">Disclaimer </a>
                            <a class="{{ request()->is('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}">Faqs </a>
                            <a class="{{ request()->is('terms-and-conditions') ? 'active' : '' }}"
                                href="{{ route('terms-and-conditions') }}">Terms & Conditions </a>
                            <a class="{{ request()->is('privacy-policy') ? 'active' : '' }}"
                                href="{{ route('privacy-policy') }}">Privacy Policy </a>
                            <a class="{{ request()->is('contact-us') ? 'active' : '' }}"
                                href="{{ route('contact-us') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- GO TO TOP -->
    <a href="#" class="cd-top"><i class="ion-chevron-up"></i></a>
    <!-- GO TO TOP End -->
    @livewireScripts
    <script src="{{ asset('js/theme-js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/theme-js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/theme-js/main.js') }}"></script>
    @yield('page-scripts')
    <h1 style="display: none">designed and developed by <a href="https://zaions.com" target="_blank"
            title="zaions.com a group of projects, zaions.com is mainly web & apps services providing company, its main project is learn.zaions.com which a skills training providing website.">Zaions.com</a>
    </h1>
</body>

</html>
