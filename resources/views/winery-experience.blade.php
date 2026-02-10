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
            <p class="winery-slideshow--text">Slideshow of Images from the Farm</p>
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
                                        <h4 class="winery-experience--box-title">{{ $slide->title }}</h4>
                                        @if ($slide->description)
                                            <p class="winery-experience--box-description">
                                                {{ $slide->description }}
                                            </p>
                                        @endif
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
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/winery-experience-carousel.js') }}"></script>
@endpush

