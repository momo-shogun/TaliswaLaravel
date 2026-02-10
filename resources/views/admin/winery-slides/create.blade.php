@extends('layouts.app')

@section('title', 'Add Winery Slide - Admin')

@section('body-class', 'admin-page')

@section('content')
    @include('admin.partials.nav')

    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Add Winery Experience Slide</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.winery-slides.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description (optional)</label>
                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="4"
                    >{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input
                        type="number"
                        class="form-control"
                        id="sort_order"
                        name="sort_order"
                        value="{{ old('sort_order', 0) }}"
                        min="0"
                    >
                    <div class="form-text">
                        Lower numbers appear first in the carousel.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input
                        type="file"
                        class="form-control"
                        id="image"
                        name="image"
                        accept="image/*"
                        required
                    >
                    <div class="form-text">
                        Recommended aspect ratio similar to existing placeholder area.
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.winery-slides.index') }}" class="btn btn-outline-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Save Slide
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

