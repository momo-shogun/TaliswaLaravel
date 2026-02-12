@extends('layouts.app')

@section('title', 'Talisva – Rosea Petroica')

@section('body-class', 'taliswa4-page')

@section('content')
    <section class="taliswa4-hero">
        <div class="taliswa4-carousel">
            <div class="winery-experience--track">
                <div class="winery-experience--slide">
                    <div class="taliswa4-slide-inner">
                        <div class="taliswa4-hero--left" style="bottom: 0;">
                            <div class="taliswa4-info-box">
                                <div class="taliswa4-info-content">
                                    <h2 class="taliswa4-title">
                                        Rosea Petroica
                                        <span class="taliswa4-abv">9% ABV</span>
                                    </h2>
                                    <p class="taliswa4-subtitle">Bold Elegance in Rosé Form</p>
                                    <p class="taliswa4-copy">
                                        A sophisticated Shiraz Rosé, Rosea Petroica brings the richness of shiraz grapes with the grace of a floral finish. At 12.5% ABV, it's semi-dry yet juicy, expressive yet balanced — designed for wine lovers who enjoy their rosé with character and complexity. Serve slightly chilled to unlock its full aroma.
                                    </p>
                                    <p class="taliswa4-mrp">MRP - Rs.1199 (750ml)</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/taliswa4/leftside.png') }}" alt="Talisva bird illustration" class="taliswa4-bird">
                        </div>
                        <div class="taliswa4-hero--right">
                            <img src="{{ asset('assets/img/taliswa4/bottle.png') }}" alt="Rosea Petroica bottle" class="taliswa4-bottle" style="max-height: 103vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
