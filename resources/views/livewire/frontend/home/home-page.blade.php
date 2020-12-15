<div>{{-- this round div is required due to livewire --}}
    <!-- HOME MAIN  -->
    <section class="simple-head" data-stellar-background-ratio="0.5" id="hme">
        <!-- Particles -->
        <div id="particles-js" class="d-none d-md-block"></div>
        <div class="position-center-center">
            <div class="container text-center">
                <h1>THE WORLD'S FIRST <span class="color-primary">CRYPTOCURRENCY AUCTION</span></h1>
                <h2 class="color-white">Auction Your Unwanted Crypto</h2>
                <a href="{{ route('about-us') }}" class="btn">About Us</a>
                <a href="{{ route('contact-us') }}" class="btn btn-inverse">Let's Talk</a>
            </div>
        </div>
        <div id="how-it-works">
            <div>
    </section>

    <!-- auction-steps  ROW-->
    <div class="auction-steps padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-12 margin-bottom-50">
                    <span class="d-block h1 text-center margin-bottom-30">How It <span
                            class="color-primary">Works</span></span>
                    <span class="d-block h3 text-center">Get in on the auction in 3 simple steps.</span>
                </div>
                <div class="col-12 col-md-4 text-center auction-step">
                    <img src="{{ asset('images/cryptbids/auction-step-1.png') }}"
                        class="auction-step__img margin-bottom-30" />
                    {{-- <span
                        class="auction-step__title margin-bottom-20 h3 d-block">Create your <span
                            class="color-primary">account</span></span>
                    <span class="auction-step__description h5">Sign up directly on our website.</span>
                    --}}
                    <span class="auction-step__title margin-bottom-20 h3 d-block">Select The <span
                            class="color-primary">"Register"</span> Button.</span>
                </div>
                <div class="col-12 col-md-4 text-center auction-step">
                    <img src="{{ asset('images/cryptbids/auction-step-2.png') }}"
                        class="auction-step__img margin-bottom-30" />
                    <span class="auction-step__title margin-bottom-20 h3 d-block">Go Through The <span
                            class="color-primary">Verification</span> Process.</span>
                </div>
                <div class="col-12 col-md-4 text-center auction-step">
                    <img src="{{ asset('images/cryptbids/auction-step-3.png') }}"
                        class="auction-step__img margin-bottom-30" />
                    <span class="auction-step__title margin-bottom-20 h3 d-block">Start <span
                            class="color-primary">Auctioning!</span></span>
                </div>
            </div>
        </div>
    </div>

    {{-- auction-join-us Row --}}
    <div class="padding-top-20 padding-bottom-100 auction-join-us">
        <div class="container">
            <div class="row">
                <span class="d-block h2 margin-bottom-30 text-center text-heavy">Join a global community of
                    people who have discovered their pathway to the crypto <span class="color-primary">with
                        Cryptbids</span>.​</span>
                <span class="d-block h4 text-center w-100">Get in on the auction in 3 simple steps.</span>
                <div class="auction-join-us__video margin-top-60">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HqyFTk0LxyA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- auction-benifits Row --}}
    <div class="padding-top-150 padding-bottom-100 auction-benifits">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pr-0">
                    <img src="{{ asset('images/cryptbids/cryptbids-laptop.png') }}"
                        class="auction-benifits__img w-100 mt-5" />
                </div>
                <div class="col-12 col-md-6 pl-0">
                    <span class="d-block fs-huge mb-5 text-heavy text-center text-md-left">Crypto was hard.
                        <span class="color-primary d-block">Cryptbids made it easy.</span></span>
                    <div class="row">
                        <div class="col-12 auction-benifits__point">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <i class="fas fa-volume-up auction-benifits__point--icon color-primary h1"></i>
                                </div>
                                <div class="col-9 mb-3">
                                    <span class="text-blod h4 mb-3 d-block">Designed for You</span>
                                    <p class="text-grey font-bold">From entry level to expert, we’ve got you covered.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 auction-benifits__point">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <i class="fas fa-globe auction-benifits__point--icon color-primary h1"></i>
                                </div>
                                <div class="col-9 mb-3">
                                    <span class="text-blod h4 mb-3 d-block">SmartAuction- Exclusive to Cryptbids</span>
                                    <p class="text-grey font-bold">Direct peer to peer transfer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 auction-benifits__point">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <i class="fas fa-user auction-benifits__point--icon color-primary h1"></i>
                                </div>
                                <div class="col-9 mb-3">
                                    <span class="text-blod h4 mb-3 d-block">Get Verified in Minutes</span>
                                    <p class="text-grey font-bold">Start auctioning today.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- why-auction Row --}}
    <div class="padding-top-100 padding-bottom-100 why-auction bg-lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <span class="d-block fs-huge text-heavy mb-4 mt-0 mt-md-5">Cryptbids is the coolest thing in <span
                            class="color-primary">crypto</span></span>
                    <p class="h5 text-grey">The safe way to auction Crypto. Cryptbids never holds customer funds or
                        stores your payment information. Use the third-party wallet of your choice for complete control
                        over your coins and tokens.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/cryptbids/businessman.png') }}" class="w-100 why-auction__img" />
                </div>
            </div>
        </div>
    </div>

    {{-- for-you section --}}
    <div class="for-you padding-top-100 padding-bottom-100">
        <div class="conatiner">
            <div class="row">
                <div class="col-12 mb-4">
                    <span class="text-heavy h2 d-block text-center">Whether you’re experienced in cryptocurrency or just
                        getting started, <span class="color-primary">Cryptbids is for you</span>.</span>
                </div>
                <div class="for-you__currencies mt-4">
                    <img class="for-you__currency" src="{{ asset('images/cryptbids/crpytbids-currency-1.png') }}" />
                    <img class="for-you__currency" src="{{ asset('images/cryptbids/crpytbids-currency-2.png') }}" />
                    <img class="for-you__currency" src="{{ asset('images/cryptbids/crpytbids-currency-3.png') }}" />
                    <img class="for-you__currency" src="{{ asset('images/cryptbids/crpytbids-currency-4.png') }}" />
                    <img class="for-you__currency" src="{{ asset('images/cryptbids/crpytbids-currency-5.png') }}" />
                </div>
            </div>
        </div>
    </div>
    <!-- Join our community -->
    {{-- <section class="community-sec padding-top-150 padding-bottom-150">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sm-intro">
                        <h2>Join our community</h2>
                        <ul class="socials">
                            <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fab fa-github"></i></a></li>
                            <li><a href="#."><i class="fab fa-telegram"></i></a></li>
                            <li><a href="#."><i class="fab fa-gitter"></i></a></li>
                            <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="news-letter">
                        <h2>Subscribe to our newsletter</h2>
                        <form>
                            <input type="email" placeholder="Enter your email address" required>
                            <button type="submit">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
@section('page-scripts')
    <script src="{{ asset('js/pages-js/home-page.js') }}"></script>
    <script src="{{ asset('js/theme-js/particles.min.js') }}"></script>
@endsection
