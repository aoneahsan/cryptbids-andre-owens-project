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
                                <a href="index.html" class="site_logo">
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
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                <div class="right_col right_col_exchange" role="main">
                    <div class="exchange-section data_background text-center"
                        data-background='{{ asset('cryptic-template-assets/images/exchange-background.png') }}'>
                        <h1 class="text-center">Buy and sell Coins at the Cryptbids without additional fees</h1>
                        <p class="text-center">Buy now and get +40% extra bonus Minimum pre-sale amount 25 Cryptbids
                            Coin.
                            We accept BTC crypto-currency.</p>
                        <div class="exchange-calculator text-center">
                            <input type="text" name="coins-exchange" placeholder="" value="0.04321">
                            <select class="coins-exchange" name="state">
                                <option value="BTC">BTC</option>
                                <option value="BTC">Ethereum</option>
                                <option value="Ripple">Ripple</option>
                                <option value="Ripple">Bitcoin Cash</option>
                                <option value="Ripple">Cardano</option>
                                <option value="Ripple">Litecoin</option>
                                <option value="Ripple">NEO</option>
                                <option value="Ripple">Stellar</option>
                                <option value="Ripple">EOS</option>
                                <option value="Ripple">NEM</option>
                            </select>
                            <div class="equal"> = </div>
                            <input type="text" name="money-exchange" placeholder="" value="33.4343">
                            <select class="money-exchange" name="state">
                                <option value="USD">USD</option>
                                <option value="EURO">EURO</option>
                            </select>
                        </div>
                        <a href="tables.market-capitalizations.html" class="btn btn-default button-element">EXCHANGE
                            NOW</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="spacer_30"></div>
                    <div class="margin_left_right_30">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc BTC" title="BTC"></i> Bitcoin BTC</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.00000434 <span class="color-gray">BTC</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-success">+1.35%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_btc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc LTC" title="LTC"></i> Litecoin LTC</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.00000434 <span class="color-gray">LTC</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-danger">-1.35%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_ltc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc NEO" title="NEO"></i> Neo NEO</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.00000434 <span class="color-gray">NEO</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-danger">-1.35%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_neo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc DASH" title="DASH"></i> Dash DASH</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.000434 <span class="color-gray">DASH</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-success">+0.99%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_dash"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc ETH" title="ETH"></i> Ethereum ETH</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.00000434 <span class="color-gray">LTC</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-success">+0.35%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_eth"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-default exchange">
                                    <div class="panel-body">
                                        <h3><i class="cc XRP" title="XRP"></i> Ripple XRP</h3>
                                        <div class="row">
                                            <div class="col-md-6">0.000434 <span class="color-gray">XRP</span> <span
                                                    class="text-info">$0.04</span></div>
                                            <div class="col-md-6 text-right text-danger">-0.99%</div>
                                        </div>
                                        <div class="highchart_currency" id="chart_ripple_xrp"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
