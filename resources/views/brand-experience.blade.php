@extends('layouts.app')

@section('title', 'Brand Experience - Talisva Website')

@section('body-class', '')

@section('content')
    <!--  NAVBAR  -->
    <nav class="navbar">
        <a href="" class="navbar--link">Products</a>
        <a href="" class="navbar--link">Winery Experience</a>
        <a href="" class="navbar--logo">
            <img src="{{ asset('assets/img/logos/main-logo.png') }}" class="img-fluid" alt="" srcset="">
        </a>
        <a href="" class="navbar--link">Tanoma Club</a>
        <a href="{{ route('about-us') }}" class="navbar--link">About US</a>
    </nav>

    <!-- ABOUT SECTION (Top Part) -->
    <section class="about-section">

        <img src="{{ asset('assets/img/brand-label.png') }}" class="img-fluid about-section--label" alt="" srcset="">
        <p class="desc">Our wines and melomels are handcrafted adventures- where tradition dances with innovation to
            awaken your senses and spark your curiosity</p>
        <img src="{{ asset('assets/img/green-bg.png') }}" class="img-fluid about-section--bg" alt="" srcset="">
        <img src="{{ asset('assets/img/brand-bg.png') }}" class="img-fluid about-section--creative" alt="" srcset="">

    </section>

    <!-- MARQUEE SECTION -->
    <section class="info-boxes" style="padding: 28px;">

        <marquee behavior="" direction="">
            <div>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
            </div>
        </marquee>

    </section>

    <!-- BRAND EXPERIENCE CAROUSEL SECTION -->
    <section class="brand-experience-carousel-section">
        <!-- Left Navigation Button -->
        <button class="winery-experience--nav-btn winery-experience--nav-btn-left">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Previous">
        </button>

        <!-- Right Navigation Button -->
        <button class="winery-experience--nav-btn winery-experience--nav-btn-right">
            <img src="{{ asset('assets/img/rightbtn.png') }}" alt="Next">
        </button>

        <div class="container-fluid">
            <!-- Brand Experience Carousel -->
            <div class="winery-experience--carousel brand-carousel--wrap">
                <div class="winery-experience--track">
                    <!-- Slide 1 -->
                    <div class="winery-experience--slide">
                        <div class="row g-0 brand-carousel--row">
                            <!-- Left: warm beige, bottle -->
                            <div class="col-lg-6 brand-carousel--left">

                                    <img src="{{ asset('assets/img/brandExperience/bottole.png') }}" alt="Talisva Product" class="brand-carousel--product">

                            </div>
                            <!-- Right: dark green card, title + text + flower -->
                            <div class="col-lg-6 brand-carousel--right">
                                <div class="brand-carousel--card">
                                    <h3 class="brand-carousel--title">Chill The Bottles</h3>
                                    <p class="brand-carousel--text">Chill Talisva and Nomad wines in the refridgerator for 1-2 hours before serving, so each pour bursts with lively flavours and irresistable aromas. Share it straight from the fridge for a refreshingly crisp taste. Let each sip surprise and delight at the perfect temperature</p>
                                    <p class="brand-carousel--text">We can also add pairings here.</p>
                                </div>
                                <div class="brand-carousel--flower-wrapper">
                                    <img src="{{ asset('assets/img/flower.png') }}" alt="Flower" class="brand-carousel--flower">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="winery-experience--slide">
                        <div class="row g-0 brand-carousel--row">
                            <div class="col-lg-6 brand-carousel--left">
                                <div class="brand-carousel--product-wrapper">
                                    <img src="{{ asset('assets/img/brandExperience/bottole.png') }}" alt="Talisva Product" class="brand-carousel--product">
                                </div>
                            </div>
                            <div class="col-lg-6 brand-carousel--right">
                                <div class="brand-carousel--card">
                                    <h3 class="brand-carousel--title">Chill The Bottles</h3>
                                    <p class="brand-carousel--text">Chill Talisva and Nomad wines for optimal flavour and taste.</p>
                                    <p class="brand-carousel--text">We can also add pairings here.</p>
                                </div>
                                <div class="brand-carousel--flower-wrapper">
                                    <img src="{{ asset('assets/img/flower.png') }}" alt="Flower" class="brand-carousel--flower">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="winery-experience--slide">
                        <div class="row g-0 brand-carousel--row">
                            <div class="col-lg-6 brand-carousel--left">
                                <div class="brand-carousel--product-wrapper">
                                    <img src="{{ asset('assets/img/brandExperience/bottole.png') }}" alt="Talisva Product" class="brand-carousel--product">
                                </div>
                            </div>
                            <div class="col-lg-6 brand-carousel--right">
                                <div class="brand-carousel--card">
                                    <h3 class="brand-carousel--title">Chill The Bottles</h3>
                                    <p class="brand-carousel--text">Chill Talisva and Nomad wines for optimal flavour and taste.</p>
                                    <p class="brand-carousel--text">We can also add pairings here.</p>
                                </div>
                                <div class="brand-carousel--flower-wrapper">
                                    <img src="{{ asset('assets/img/flower.png') }}" alt="Flower" class="brand-carousel--flower">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="winery-experience--slide">
                        <div class="row g-0 brand-carousel--row">
                            <div class="col-lg-6 brand-carousel--left">
                                <div class="brand-carousel--product-wrapper">
                                    <img src="{{ asset('assets/img/brandExperience/bottole.png') }}" alt="Talisva Product" class="brand-carousel--product">
                                </div>
                            </div>
                            <div class="col-lg-6 brand-carousel--right">
                                <div class="brand-carousel--card">
                                    <h3 class="brand-carousel--title">Chill The Bottles</h3>
                                    <p class="brand-carousel--text">Chill Talisva and Nomad wines for optimal flavour and taste.</p>
                                    <p class="brand-carousel--text">We can also add pairings here.</p>
                                </div>
                                <div class="brand-carousel--flower-wrapper">
                                    <img src="{{ asset('assets/img/flower.png') }}" alt="Flower" class="brand-carousel--flower">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination dots -->
            <div class="winery-pagination brand-carousel--pagination">
                <span class="winery-pagination--dot active" data-slide="0" aria-label="Slide 1"></span>
                <span class="winery-pagination--dot" data-slide="1" aria-label="Slide 2"></span>
                <span class="winery-pagination--dot" data-slide="2" aria-label="Slide 3"></span>
                <span class="winery-pagination--dot" data-slide="3" aria-label="Slide 4"></span>
            </div>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer class="m-footer">

        <section class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('assets/img/logos/footer-logo.png') }}" class="img-fluid m-footer--logo" alt="" srcset="">
                    <p><span style="text-transform: uppercase;display: block;">Kikkeri Farm Food & Beverages Pvt.
                            Ltd.</span>
                        Talisva Winery, Thirthahalli, Karnataka India</br> info@talisva.com</p>

                    <ul class="m-footer--social-links mt-3">
                        <li><a href="" class="m-footer--social-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="" class="m-footer--social-link"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="" class="m-footer--social-link"><i class="fa-brands fa-linkedin-in"></i></a></li>

                    </ul>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="m-footer--title">Wines <span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="" class="m-footer--link" style="text-transform: uppercase;">Talisva Fruit
                                        wines</a></li>
                                <li><a href="" class="m-footer--link" style="text-transform: uppercase;">Nomad</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">About<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="" class="m-footer--link">Our Family</a></li>
                                <li><a href="" class="m-footer--link">Practice</a></li>
                                <li><a href="" class="m-footer--link">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Experience<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="" class="m-footer--link">Tours</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Tanoma Club<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="" class="m-footer--link">Subcriptions</a></li>
                                <li><a href="" class="m-footer--link">Rewards</a></li>
                                <li><a href="" class="m-footer--link">Benefits</a></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <label class="mt-10">Join our list and get notified when its wine o'clock</label>

                            <div class="m-footer--input-box mt-2">
                                <input type="text">
                                <button>Subscribe</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/winery-experience-carousel.js') }}"></script>
@endpush
