@extends('layouts.app')

@section('title', 'Talisva – Forest Tisler')

@section('body-class', 'taliswa1-page')

@section('content')
    <section class="taliswa1-hero">
        <div class="taliswa1-hero--left">
            <div class="taliswa1-info-box">
                <div class="taliswa1-info-content">
                    <h2 class="taliswa1-title">
                        <span>FOREST PIPER</span>
                        <span class="taliswa1-abv">9% ABV</span>
                    </h2>
                    <p class="taliswa1-subtitle">INDIA'S FIRST BETEL LEAF WINE</p>
                    <p class="taliswa1-copy">
                        Forest Piper is a groundbreaking creation — the first-ever wine made from betel leaves (paan) in India. Herbaceous, intriguing, and refreshingly offbeat, this 9% ABV vintner's reserve carries notes of fresh green spice, floral complexity, and subtle sweetness. A tribute to bold tradition with modern flair — perfect for after-dinner sipping or as a conversation-starting gift.
                    </p>
                    <p class="taliswa1-mrp">MRP – Rs.950 (375ml)</p>
                </div>
            </div>
            <img src="{{ asset('assets/img/taliswa1/BIRD.png') }}" alt="Talisva bird illustration" class="taliswa1-bird">
        </div>
        <div class="taliswa1-hero--right">
            <img src="{{ asset('assets/img/taliswa1/taliswa1bottle.png') }}" alt="Talisva bottle" class="taliswa1-bottle">
        </div>
    </section>
@endsection
