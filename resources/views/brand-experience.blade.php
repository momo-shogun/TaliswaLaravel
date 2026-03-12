@extends('layouts.app')

@section('title', 'Brand Experience - Talisva Website')

@section('body-class', '')

@section('content')

<!-- Left Column (60%) - Image -->


<!-- Top left corner button -->
<a href="{{ url('/') }}" class="about-hero--arrow about-hero--arrow-top-left">
    <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
</a>


<!-- ABOUT SECTION (Top Part) -->
<section class="about-section">

    <img src="{{ asset('assets/img/brand-label.png') }}" class="img-fluid about-section--label" alt="" srcset="">
    <p class="desc">Talisva X Nomad celebrates the joy of fruit beverages in every sip. Talisva Premium offers carefully crafted fruit wines — elegant, balanced, and perfect for savoring slowly. Nomad by Talisva brings a playful twist with Melomel variants, lightly effervescent fruit “beer-style” bursting with flavor and character. Chill, pour, sniff, sip… and enjoy the journey, whether it’s the sophistication of wine or the spirited fun of a Melomel.
    </p>
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
                @forelse ($slides as $index => $slide)
                <div class="winery-experience--slide">
                    <div class="row g-0 brand-carousel--row">
                        <div class="col-lg-6 brand-carousel--left">
                            <div class="brand-carousel--product-wrapper">
                                @if ($slide->image_path)
                                <img src="{{ asset('storage/' . $slide->image_path) }}" alt="{{ $slide->title }}" class="brand-carousel--product">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 brand-carousel--right">
                            <div class="brand-carousel--card">
                                <h3 class="brand-carousel--title">{{ $slide->title }}</h3>
                                @if ($slide->description)
                                <div class="brand-carousel--text">{!! nl2br(e($slide->description)) !!}</div>
                                @endif
                            </div>
                            <div class="brand-carousel--flower-wrapper">
                                <img src="{{ asset('assets/img/flower.png') }}" alt="Flower" class="brand-carousel--flower">
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="mt-4">No brand experience slides are configured yet. Please add some from the admin panel.</p>
                @endforelse
            </div>
        </div>

        <!-- Pagination dots -->
        @if ($slides->count())
        <div class="winery-pagination brand-carousel--pagination">
            @foreach ($slides as $index => $slide)
            <span class="winery-pagination--dot {{ $loop->first ? 'active' : '' }}" data-slide="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></span>
            @endforeach
        </div>
        @endif
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