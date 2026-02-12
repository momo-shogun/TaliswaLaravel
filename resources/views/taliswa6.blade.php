@extends('layouts.app')

@section('title', 'Talisva – Plum N Roll')

@section('body-class', 'taliswa6-page')

@section('content')
    <section class="taliswa6-hero">
        <div class="taliswa6-carousel">
            <div class="winery-experience--track">
                <div class="winery-experience--slide">
                    <div class="taliswa6-slide-inner">
                        <div class="taliswa6-hero--left" style="bottom: 0;">
                            <div class="taliswa6-info-box">
                                <div class="taliswa6-info-content">
                                    <h2 class="taliswa6-title">
                                        Plum & Roll
                                        <span class="taliswa6-abv">9% ABV</span>
                                    </h2>
                                    <p class="taliswa6-subtitle">Deep, Earthy, and Smooth.</p>
                                    <p class="taliswa6-copy">
                                        Plum N Roll celebrates the richness of Indian jamun (Java plum) in a bold, velvety wine with 9% ABV. Slightly tart with hints of wild berries and spice, this fruit wine rolls effortlessly across the palate — offering a nostalgic yet modern drinking experience. Pairs beautifully with smoky or grilled dishes.
                                    </p>
                                    <p class="taliswa6-mrp">MRP - Rs.1250 (750ml)</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/taliswa6/leftside.png') }}" alt="Talisva bird illustration" class="taliswa6-bird">
                        </div>
                        <div class="taliswa6-hero--right">
                            <img src="{{ asset('assets/img/taliswa6/bottle.png') }}" alt="Plum N Roll bottle" class="taliswa6-bottle" style="max-height: 103vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
