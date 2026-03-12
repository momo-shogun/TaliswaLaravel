@extends('layouts.app')

@section('title', 'About Us - Talisva')

@section('body-class', 'about-us-page')

@section('content')
    <!-- SECTION 1: Hero/About Sushma Section -->
    <section class="about-hero">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <!-- Left Column (60%) - Image -->
                <div class="col-lg-6 about-hero--image-col">
                    <div class="about-hero--image-wrapper">
                        <img src="{{ asset('assets/img/girlwithbear.png') }}" class="about-hero--image" alt="Sushma Sanjay">
                        <!-- Top left corner button -->
                        <a href="{{ url('/') }}" class="about-hero--arrow about-hero--arrow-top-left">
                            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
                        </a>
                    </div>
                </div>
                <!-- Right Column (40%) - Text Content -->
                <div class="col-lg-6 about-hero--content-col">
                    <div class="about-hero--content">
                        <p class="about-hero--text">
                        <span style="font-size: 24px; font-weight: 600;">Sushma Sanjay</span>
                        <br>
                            <em>Founder &amp; Managing Director</em>
                        </p>
                        <p class="about-hero--text">
                            <strong>Talisva</strong> is a self-made dream turned thriving family-owned enterprise, born from the passion
                            and curiosity of <strong>Sushma Sanjay</strong>. From humble beginnings in 2005, experimenting with seasonal fruits,
                            vegetables, and nuts without added flavors or colors, her commitment to natural processes led to the creation
                            of distinctive, hand-crafted wines. Early small-batch successes grew into a recognized brand, positively
                            impacting the local community of <strong>Kikkeri</strong> and inspiring women along the way.
                        </p>
                        <p class="about-hero--text">
                            Today, <strong>Talisva</strong> spans a 25-acre winery and areca estate in the Western Ghats, producing small batches
                            of fruit wines in flavors like jamun, grape, pineapple, and betel leaf. Guided by integrity and authenticity,
                            each bottle blends carefully hand-picked ingredients, aromatic complexity, and balanced flavors — a reflection
                            of Sushma’s journey and the art of crafting perfect wines.
                        </p>
                        <p class="about-hero--text" style="padding-top: 30px;">
                            <strong>With integrity and authenticity, we hope you will welcome Talisva into your lifestyle.</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- SECTION 2: Our Team Section (dynamic) -->
    <section class="about-team">
        <div class="container">
            <h3 class="about-team--title heading--lg mb-12">Our Team</h3>
            @if ($teamMembers->count())
                <div class="row g-4">
                    @foreach ($teamMembers as $member)
                        <div class="col-md-4">
                            <div class="about-team--box">
                                @if ($member->image_path)
                                    <div class="about-team--image-wrapper">
                                        <img
                                            src="{{ asset('storage/' . $member->image_path) }}"
                                            alt="{{ $member->name }}"
                                            class="about-team--image img-fluid"
                                        >
                                    </div>
                                @endif
                                <div class="about-team--overlay">
                                    <div class="about-team--overlay-inner">
                                        @if ($member->name)
                                            <div class="about-team--name">{{ $member->name }}</div>
                                        @endif
                                        @if ($member->role)
                                            <div class="about-team--role">{{ $member->role }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-4">
                    Our team details will be available soon. Please check back later.
                </p>
            @endif
        </div>
    </section>

    <!-- SECTION 3: Timeline Infographic Section (static) -->
    <section class="about-timeline">
        <div class="container">
            <h3 class="about-timeline--title heading--lg mb-12" style="color: var(--green-1);">Timeline Infographic</h3>
            <div class="about-timeline--wrapper">
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2005</div>
                    <div class="about-timeline--description">
                        A PASSION IGNITES: SUSHMA EMBARKS ON A WINEMAKING JOURNEY ROOTED IN CURIOUS EXPERIMENTATION.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2007</div>
                    <div class="about-timeline--description">
                        CRAFTING HER FIRST FRUIT WINE VARIETALS, SUSHMA TRANSFORMS SEASONAL HARVESTS INTO HAND-CRAFTED TREASURES.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2008</div>
                    <div class="about-timeline--description">
                        CHERISHED FRIENDS AND FAMILY GATHER FOR EXCLUSIVE WINE TASTING EXPERIENCES, CELEBRATING THE EMERGENCE OF DISTINCT FRUIT WINE FLAVORS.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2009</div>
                    <div class="about-timeline--description">
                        THE VERY FIRST BOTTLES OF HOMEMADE WINE CROSS THE THRESHOLD, TURNING A HOBBY INTO A TRANSACTION.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2015</div>
                    <div class="about-timeline--description">
                        A DECADE OF DEDICATION YIELDS TEN DISTINCT, HIGH QUALITY FRUIT WINE CONCOCTIONS.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2020</div>
                    <div class="about-timeline--description">
                        TALISVA TAKES FORMAL SHAPE AS A COMPANY, READY TO SCALE THE ARTISANAL WINEMAKING LEGACY.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2022 NOVEMBER</div>
                    <div class="about-timeline--description">
                        TALISVA'S SIGNATURE FRUIT WINES LAUNCH TO THE WORLD, SHARING A HERITAGE OF NATURAL PURITY
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2024 January</div>
                    <div class="about-timeline--description">
                        TALISVA PROUDLY PIONEERED INDIA'S FIRST-EVER BETEL LEAF (PAAN) WINE, CRAFTED USING HOMEGROWN ARECA AND BETEL LEAVES FROM ITS ESTATE.
                    </div>
                </div>
                <div class="about-timeline--entry">
                    <div class="about-timeline--year">2025 June</div>
                    <div class="about-timeline--description">
                        TALISVA INTRODUCED NOMAD, A NEW SEGMENT PRESENTING BOLDER, ADVENTUROUS FRUITY MELOMEL BLENDS, EXPANDING THE BRAND'S CREATIVE AND EXPERIENTIAL REACH.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

