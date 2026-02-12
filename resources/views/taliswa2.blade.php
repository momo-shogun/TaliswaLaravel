@extends('layouts.app')

@section('title', 'Talisva – Forest Piper 2')

@section('body-class', 'taliswa2-page')

@section('content')
    <section class="taliswa2-hero">
        <div class="taliswa2-carousel">
            <div class="winery-experience--track">
                <div class="winery-experience--slide">
                    <div class="taliswa2-slide-inner">
                        <div class="taliswa2-hero--left" style="bottom: 0;">
                            <div class="taliswa2-info-box">
                                <div class="taliswa2-info-content">
                                    <h2 class="taliswa2-title" style="padding-top: 14px;">
                                        Honey<br>Thrush
                                        <span class="taliswa2-abv">9% ABV</span>
                                    </h2>
                                    <p class="taliswa2-subtitle">Zesty, Golden,Wonderfully Balanced</p>
                                    <p class="taliswa2-copy">
                                        Infused with orange peel and fermented honey, Honey Thrush is a luxurious fruit wine with a citrus-forward profile. With 11.5% ABV, it opens with a burst of orange zest and softens into a smooth, honeyed finish. Think of it as sunshine in a glass, perfect for festive toasts or creative cocktail bases.
                                    </p>
                                    <p class="taliswa2-mrp">MRP - Rs.1049 (750ml)</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/taliswa2/leftside.png') }}" alt="Talisva bird illustration" class="taliswa2-bird">
                        </div>
                        <div class="taliswa2-hero--right">
                            <img src="{{ asset('assets/img/taliswa2/bottle1.png') }}" alt="Talisva bottle" class="taliswa2-bottle" style="max-height: 103vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
