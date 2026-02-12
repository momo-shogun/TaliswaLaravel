@extends('layouts.app')

@section('title', 'Talisva – Pineapple Plover')

@section('body-class', 'taliswa5-page')

@section('content')
    <section class="taliswa5-hero">
        <div class="taliswa5-carousel">
            <div class="winery-experience--track">
                <div class="winery-experience--slide">
                    <div class="taliswa5-slide-inner">
                        <div class="taliswa5-hero--left" style="bottom: 0;">
                            <div class="taliswa5-info-box">
                                <div class="taliswa5-info-content">
                                    <h2 class="taliswa5-title">
                                        Pineapple Plover
                                        <span class="taliswa5-abv">9% ABV</span>
                                    </h2>
                                    <p class="taliswa5-subtitle">Tropical, Crisp, Refreshing</p>
                                    <p class="taliswa5-copy">
                                        Crafted from luscious, sun-ripened pineapples, Pineapple Plover is a bright, semi-sweet fruit wine that captures the vibrant essence of the tropics. With a clean 9% ABV, this wine offers notes of tangy pineapple, a hint of citrus, and a lively finish — ideal for relaxed brunches or chilled evenings under open skies.
                                    </p>
                                    <p class="taliswa5-mrp">MRP - Rs.899 (750ml)</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/taliswa5/leftside.png') }}" alt="Talisva bird illustration" class="taliswa5-bird">
                        </div>
                        <div class="taliswa5-hero--right">
                            <img src="{{ asset('assets/img/taliswa5/bottle.png') }}" alt="Pineapple Plover bottle" class="taliswa5-bottle" style="max-height: 103vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
