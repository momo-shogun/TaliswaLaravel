@extends('layouts.app')

@section('title', 'Nomad – Raspberry Melomel')

@section('body-class', 'nomad3-page')

@section('content')
    <section class="nomad3-hero">
        <div class="nomad3-hero--left">
            <img src="{{ asset('assets/img/nomad2/leftBottom2.png') }}" alt="Nomad illustration" class="nomad3-tree">
            <div class="nomad3-text-card">
                <div class="nomad3-text-inner">
                    <h2 class="nomad3-title">Raspberry <br> Melomel</h2>
                    <p class="nomad3-abv">5.5% ABV</p>
                    <p class="nomad3-tagline">Bright Pink. Tangy. <br> Playfully Bold.</p>
                    <p class="nomad3-copy">
                        Crafted with wildflower honey and juicy red raspberries, this Melomel is a vibrant, lightly carbonated pour that balances sweet and tart beautifully. At 5.5% ABV, it's sessionable, crisp, and endlessly sippable. Think berry punch with a grown-up twist — made for fruit-forward rebels.
                    </p>
                    <p class="nomad3-mrp">MRP - Rs.135 (330ml)</p>
                </div>
            </div>
        </div>
        <div class="nomad3-hero--right">
            <img src="{{ asset('assets/img/nomad2/bottle2.png') }}" alt="Raspberry Melomel bottle" class="nomad3-bottle">
        </div>
    </section>
@endsection
