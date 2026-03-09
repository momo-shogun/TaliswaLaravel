@extends('layouts.app')

@section('title', 'Winery Experience - Talisva')

@section('body-class', 'winery-experience-page')

@section('content')
    <!-- Top Section: Slideshow with About Card Overlay -->
    <section class="winery-slideshow-section">
        <!-- Back button and Title - Same line, center aligned -->
        <div class="winery-slideshow--header">
            <a href="{{ url('/') }}" class="winery-experience--back-btn">
                <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
            </a>
            <!-- <p class="winery-slideshow--text">Slideshow of Images from the Farm</p> -->
        </div>

        <!-- About Kikeri Farms Card - Overlay on background (kept static for now) -->
        <section class="winery-about-section">
            <div class="container-fluid">
                <div class="row g-0">
                    <!-- Left: Map -->
                    <div class="col-lg-6 winery-map-col">
                        <div class="winery-map--container">
                            <img src="{{ asset('assets/img/wineryExp/map.png') }}" alt="Karnataka Map" class="winery-map--image">
                        </div>
                    </div>
                    <!-- Right: Text Content -->
                    <div class="col-lg-6 winery-about-col">
                        <div class="winery-about--content">
                            <h3 class="winery-about--title">ABOUT KIKERI FARMS</h3>
                            <p class="winery-about--text">
                                Copy (TBD) At Talisva, wine is more than a drink- it’s an experience. Whether youre
                                curious to explore fruit wines for the first time  or an already seasoned enthusiast,
                                we have something special for you. Join us for a guided tasting, walk through our
                                orchards and winery to see where the magic happens, or spend the day soaking in
                                nature with a glass in hand. Every visit is a journey into flavour, craft and discovery
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Bottom Section: Winery Experience -->
    <section class="winery-experience-section">
        <!-- Left Navigation Button -->
        <button class="winery-experience--nav-btn winery-experience--nav-btn-left">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Previous">
        </button>

        <!-- Right Navigation Button -->
        <button class="winery-experience--nav-btn winery-experience--nav-btn-right">
            <img src="{{ asset('assets/img/rightbtn.png') }}" alt="Next">
        </button>

        <div class="container">
            <h3 class="winery-experience--title">WINERY EXPERIENCE</h3>
            <p class="winery-experience--text">
                At Talisva, wine is more than a drink- it's an experience. Whether you're curious to explore fruit wines
                for the first time or an already seasoned enthusiast, we have something special for you. Join us for a guided
                tasting, walk through our orchards and winery to see where the magic happens, or spend the day soaking in nature
                with a glass in hand. Every visit is a journey into flavour, craft and discovery.
            </p>

            <!-- Experience Boxes Carousel -->
            <div class="winery-experience--carousel">
                <div class="winery-experience--track">
                    @forelse ($slides as $index => $slide)
                        <div class="winery-experience--slide">
                            <div class="row g-4 winery-experience--boxes">
                                <div class="col-md-6 p-0">
                                    <div class="winery-experience--box winery-experience--box-beige">
                                        <div class="winery-experience--placeholder">
                                            @if ($slide->image_path)
                                                <img
                                                    src="{{ asset('storage/' . $slide->image_path) }}"
                                                    alt="{{ $slide->title }}"
                                                    class="img-fluid"
                                                >
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="winery-experience--box winery-experience--box-green">
                                        <div class="winery-experience--box-content">
                                            <h4 class="winery-experience--box-title">{{ $slide->title }}</h4>
                                            @if ($slide->description)
                                                <div class="winery-experience--box-description">
                                                    {!! nl2br(e($slide->description)) !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="mt-4">
                            No winery experiences are configured yet. Please add some from the admin panel.
                        </p>
                    @endforelse
                </div>
            </div>

            <!-- Pagination dots -->
            @if ($slides->count())
                <div class="winery-pagination">
                    @foreach ($slides as $index => $slide)
                        <span
                            class="winery-pagination--dot {{ $loop->first ? 'active' : '' }}"
                            data-slide="{{ $index }}"
                            aria-label="Slide {{ $index + 1 }}"
                        ></span>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @if (isset($galleryItems) && $galleryItems->isNotEmpty())
    <!-- Gallery Section (Swiper infinite carousel) -->
    <section class="gallery-section">
        <div class="gallery-section--overlay"></div>
        <button type="button" class="gallery--nav-btn gallery--nav-btn-left gallery-swiper-prev" aria-label="Previous">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="">
        </button>
        <button type="button" class="gallery--nav-btn gallery--nav-btn-right gallery-swiper-next" aria-label="Next">
            <img src="{{ asset('assets/img/rightbtn.png') }}" alt="">
        </button>
        <div class="swiper gallery-swiper">
            <div class="swiper-wrapper">
                @foreach ($galleryItems as $index => $item)
                <div class="swiper-slide">
                    <div class="gallery--slide-inner">
                        @if ($item->image_path)
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gallery {{ $index + 1 }}" class="gallery--slide-img">
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection

@push('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/winery-experience-carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var el = document.querySelector('.gallery-swiper');
            if (el && el.querySelectorAll('.swiper-slide').length > 0) {
                new Swiper('.gallery-swiper', {
                    loop: true,
                    slidesPerView: 3,
                    spaceBetween: 16,
                    centeredSlides: false,
                    speed: 500,
                    autoplay: { delay: 1000, disableOnInteraction: false },
                    navigation: {
                        nextEl: '.gallery-swiper-next',
                        prevEl: '.gallery-swiper-prev'
                    },
                    breakpoints: {
                        992: { slidesPerView: 3 },
                        768: { slidesPerView: 2 },
                        0: { slidesPerView: 1 }
                    }
                });
            }
        });
    </script>
@endpush

