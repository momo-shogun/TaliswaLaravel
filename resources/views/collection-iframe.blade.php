@extends('layouts.app')

@section('title', 'Product - Talisva')

@section('body-class', '')

@section('content')
    <div class="container py-5 text-center">
        <p class="mb-0">{{ ucfirst($product ?? 'Product') }} – details coming soon.</p>
    </div>
@endsection
