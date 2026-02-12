@extends('layouts.app')

@section('title', 'Nomad – Lychee Melomel')

@section('body-class', 'nomad2-page')

@section('content')
    <section class="nomad2-hero">
        <div class="nomad2-hero--left">
            <img src="{{ asset('assets/img/nomad2/leftBottom.png') }}" alt="Nomad illustration" class="nomad2-tree">
            <div class="nomad2-text-card">
                <div class="nomad2-text-inner">
                    <h2 class="nomad2-title">Lychee <br> Melomel</h2>
                    <p class="nomad2-abv">5.5% ABV</p>
                    <p class="nomad2-tagline">Soft. Floral. <br> Easy to Love.</p>
                    <p class="nomad2-copy">
                        Our Lychee Melomel is a light-bodied mead with a refreshing 5.5% ABV, made from premium honey and handpicked lychees. It's delicately sweet, with floral top notes and a subtle tropical tang that dances on the palate. Perfect for sunlit afternoons, picnics, or anytime you need a gentle escape.
                    </p>
                    <p class="nomad2-mrp">MRP - Rs.135 (330ml)</p>
                </div>
            </div>
        </div>
        <div class="nomad2-hero--right">
            <img src="{{ asset('assets/img/nomad2/bottle.png') }}" alt="Nomad bottle" class="nomad2-bottle">
        </div>
    </section>
@endsection
