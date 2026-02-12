@extends('layouts.app')

@section('title', 'Nomad – Wild Pint')

@section('body-class', 'nomad1-page')

@section('content')
    <section class="nomad1-hero">
        <div class="nomad1-hero--left">
            <img src="{{ asset('assets/img/nomad/tree.png') }}" alt="Nomad palm tree" class="nomad1-tree">
            <div class="nomad1-text-card">
                <div class="nomad1-text-inner">
                    <h2 class="nomad1-title">Wild Pint</h2>
                    <p class="nomad1-abv">15% ABV</p>
                    <p class="nomad1-tagline">UNTAMED. BOLD. WILD.</p>
                    <p class="nomad1-copy">
                        Wild Pint is not your average pour — it's a bold fusion of honey, fruits and hops, fermented to a
                        smooth yet powerful 15% ABV. Crafted for those who crave intensity, this strong mead delivers rich
                        malt notes with a honey backbone, giving you the kick of a spirit and the soul of a brew.
                    </p>
                    <p class="nomad1-copy">
                        Best served chilled, best enjoyed fearless.
                    </p>
                    <p class="nomad1-mrp">MRP - Rs.125 (330ml)</p>
                </div>
            </div>
        </div>
        <div class="nomad1-hero--right">
            <img src="{{ asset('assets/img/nomad/bottle.png') }}" alt="Nomad Wild Pint bottle" class="nomad1-bottle">
        </div>
    </section>
@endsection
