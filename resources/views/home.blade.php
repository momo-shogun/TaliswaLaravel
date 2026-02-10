@extends('layouts.app')

@section('title', 'Talisva Website')

@section('body-class', '')

@section('content')
    <!--  NAVBAR  -->
    <nav class="navbar">
        <a href="{{ route('winery-experience') }}" class="navbar--link">Winery Experience</a>
        <a href="{{ url('/collection') }}" class="navbar--link">Products</a>
        <a href="{{ url('/') }}" class="navbar--logo">
            <img src="{{ asset('assets/img/logos/main-logo.png') }}" class="img-fluid" alt="Talisva logo">
        </a>
        <a href="{{ url('/tanoma-club') }}" class="navbar--link">Tanoma Club</a>
        <a href="{{ route('about-us') }}" class="navbar--link">About US</a>
    </nav>

    <!--  HERO SECTION  -->
    <header class="hero-banner">
        <img src="{{ asset('assets/img/left-flower.png') }}" alt="" class="img-fluid hero-banner--left-img">
        <img src="{{ asset('assets/img/right-flower.png') }}" alt="" class="img-fluid hero-banner--right-img">
        <img src="{{ asset('assets/img/header-bottom.png') }}" alt="" class="img-fluid hero-banner--bottom-img">
        <img src="{{ asset('assets/img/header-bg.png') }}" alt="" class="img-fluid hero-banner--bg">
        <h1 class="hero-banner-title">Where fruit becomes a journey</h1>
        <p class="hero-banner-desc">From tropical fruit to handcrafted wine</p>
        <img src="{{ asset('assets/img/left-bee-1.png') }}" id="HEADER_BEE_1" alt="" class="hero-banner--left-bee1">
        <img src="{{ asset('assets/img/left-bee-2.png') }}" id="HEADER_BEE_2" alt="" class="hero-banner--left-bee2">
        <img src="{{ asset('assets/img/bird.png') }}" id="HEADER_BIRD" alt="" class="hero-banner--bird">
    </header>

    <!-- FEATURED PRODUCT SECTION  -->
    <section class="feature-section">
        <span class="heading-tag"> <span class="left"></span>our <span class="right"></span></span>
        <h3 class="heading--lg mb-12">Fruit Wines</h3>

        <div class="f-card mb-10">
            <div class="f-card--img">
                <img src="{{ asset('assets/img/product-images/product-1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="f-card--content bg-1">
                <img src="{{ asset('assets/img/logos/golden-logo.png') }}" class="img-fluid f-card--logo" alt="">
                <p>Our wines and melomels are handcrafted adventures- where tradition dances with innovation to awaken
                    your senses and spark your curiosity</p>
                <img src="{{ asset('assets/img/khaki-border.png') }}" class="img-fluid f-card--border" alt="">
            </div>
        </div>

        <div class="f-card">
            <div class="f-card--content bg-2">
                <img src="{{ asset('assets/img/logos/nomad-logo.png') }}" class="img-fluid f-card--logo" alt="">
                <p>A delicious category of honey wines (meads) made by fermenting honey with fruit, adding vibrant
                    flavors, sugars, and complexity.</p>
                <img src="{{ asset('assets/img/white-border.png') }}" class="img-fluid f-card--border" alt="">
            </div>
            <div class="f-card--img">
                <img src="{{ asset('assets/img/product-images/product-2.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION  -->
    <section class="about-section">
        <img src="{{ asset('assets/img/brand-label.png') }}" class="img-fluid about-section--label" alt="">
        <p class="desc">Our wines and melomels are handcrafted adventures- where tradition dances with innovation to
            awaken your senses and spark your curiosity</p>
        <img src="{{ asset('assets/img/green-bg.png') }}" class="img-fluid about-section--bg" alt="">
        <img src="{{ asset('assets/img/brand-bg.png') }}" class="img-fluid about-section--creative" alt="">
    </section>

    <!-- CONTENT & BANNERS SECTIONS  -->
    <section class="info-boxes info-boxes-bg-1">
        <marquee behavior="" direction="">
            <div>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kakeri Farms, Authentic wines with a wild spirit</p>
            </div>
        </marquee>

        <div class="info-boxes--content-box" style="background-color: var(--orange-1);">
            <h4>Winery Experience</h4>
            <p>At Talisva, wine is more than a drink- it’s an experience. Whether youre . curious to explore fruit wines
                for the first time or an already seasoned enthusiast, we have something special for you. Join us for a
                guided tasting, walk through our orchards and winery to see where the magic happens, or spend the day
                soaking in nature with a glass in hand. Every visit is a journey into flavour, craft and discovery</p>
            <a href="{{ route('winery-experience') }}" class="primary-btn">Explore</a>
        </div>
    </section>

    <section class="info-boxes info-boxes-bg-2">
        <div class="info-boxes--content-box" style="background-color: var(--green-2);">
            <h4>Tanoma Club</h4>
            <img src="{{ asset('assets/img/house.png') }}" class="img-fluid info-boxes--content-box--img" alt="">
            <a href="{{ url('/tanoma-club') }}" class="primary-btn">Join Now</a>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer class="m-footer">
        <section class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('assets/img/logos/footer-logo.png') }}" class="img-fluid m-footer--logo" alt="">
                    <p>
                        <span style="text-transform: uppercase;display: block;">
                            Kikkeri Farm Food &amp; Beverages Pvt. Ltd.
                        </span>
                        Talisva Winery, Thirthahalli, Karnataka India</br> info@talisva.com
                    </p>

                    <ul class="m-footer--social-links mt-3">
                        <li><a href="#" class="m-footer--social-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#" class="m-footer--social-link"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="m-footer--social-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="m-footer--title">Wines <span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="#" class="m-footer--link" style="text-transform: uppercase;">Talisva Fruit
                                        wines</a></li>
                                <li><a href="#" class="m-footer--link" style="text-transform: uppercase;">Nomad</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">About<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="#" class="m-footer--link">Our Family</a></li>
                                <li><a href="#" class="m-footer--link">Practice</a></li>
                                <li><a href="#" class="m-footer--link">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Experience<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="#" class="m-footer--link">Tours</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Tanoma Club<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="#" class="m-footer--link">Subcriptions</a></li>
                                <li><a href="#" class="m-footer--link">Rewards</a></li>
                                <li><a href="#" class="m-footer--link">Benefits</a></li>
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
    <!-- Extra JS used only on home page -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/animate.js') }}"></script>
@endpush

