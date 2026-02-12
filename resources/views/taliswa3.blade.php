@extends('layouts.app')

@section('title', 'Talisva – Bee Humming')

@section('body-class', 'taliswa3-page')

@section('content')
    <section class="taliswa3-hero">
        <div class="taliswa3-carousel">
            <div class="winery-experience--track">
                <div class="winery-experience--slide">
                    <div class="taliswa3-slide-inner">
                        <div class="taliswa3-hero--left" style="bottom: 0;">
                            <div class="taliswa3-info-box">
                                <div class="taliswa3-info-content">
                                    <h2 class="taliswa3-title">
                                        Bee <br> Humming
                                        <span class="taliswa3-abv">9% ABV</span>
                                    </h2>
                                    <p class="taliswa3-subtitle">Ginger-Kissed and Full of Warmth</p>
                                    <p class="taliswa3-copy">
                                        Bee Humming is an aromatic honey wine delicately infused with fresh farm ginger. At 11.5% ABV, it offers a warming kick balanced by soft sweetness — a bold yet refined drink for those who love spice-forward profiles. Serve chilled for very interesting pallet — and equally delicious — experience.
                                    </p>
                                    <p class="taliswa3-mrp">MRP - Rs.1049 (750ml)</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/taliswa2/leftside2.png') }}" alt="Talisva bird illustration" class="taliswa3-bird">
                        </div>
                        <div class="taliswa3-hero--right">
                            <img src="{{ asset('assets/img/taliswa2/bottle2.png') }}" alt="Talisva bottle" class="taliswa3-bottle" style="max-height: 103vh;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
