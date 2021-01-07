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
    <link rel="icon" href="{{ asset('custom-assets/images/favicon.png') }}" sizes="192x192" />
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
    <link rel="stylesheet" href="{{ asset('custom-assets/css/custom-css.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="nav-sm preloader-off developer-mode">
    {{-- <div class="pace-cover"></div> --}}
    <div id="st-container" class="st-container st-effect">
        <!-- MAIN PAGE CONTAINER -->
        <div class="container body">
            <div class="main_container">
                <!-- LEFT PRIMARY NAVIGATION -->
                <div class="col-md-3 left_col">
                    <div class="scroll-view">
                        <div class="navbar nav_title">
                            <h1 class="logo_wrapper">
                                <a href="/" class="site_logo">
                                    <img class="logo"
                                        src="{{ asset('cryptic-template-assets/images/cryptic-logo.png') }}"
                                        alt="cryptic logo">
                                    <span class="logo-text">Cryptbids</span>
                                </a>
                            </h1>
                        </div>
                        <div class="clearfix"></div>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <div class="clearfix"></div>
                                <ul class="nav side-menu">
                                    <li>
                                        <a><i class="icon-home icons"></i> <span>Dashboard</span></a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" id="btnFullscreen" data-placement="top" title="FullScreen">
                                <span class="icon-size-fullscreen icons" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                                <span class="icon-power icons" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <!-- TOP SECONDARY NAVIGATION -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <ul class="nav navbar-nav navbar-left new-navbar-right">
                            <li class="toggle-li">
                                <div class="nav toggle burger-nav">
                                    <a id="menu_toggle">
                                        <div class="burger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PAGE CONTENT -->
                @inertia
                {{-- Footer Content Started --}}
                <a href="#" class="scrollToTop"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>
                <!-- PAGE FOOTER -->
                <footer>
                    <div class="pull-right">
                        All rights reserved <a href="http://cryptbids.com">Cryptbids</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </div>
        <!-- RIGHT SIDE: SEARCH FORM -->
        <div class="search search-main">
            <div id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
                <i class="fa fa-times"></i>
            </div>
            <form class="search__form" action="http://html.modeltheme.com/cryptic/search.html">
                <input class="search__input" name="search" type="search" placeholder="Hash, transactions..."
                    autocapitalize="off" spellcheck="false" />
                <span class="search__info">Hit enter to search or ESC to close</span>
            </form>
        </div>
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
    </div>
</body>

</html>
