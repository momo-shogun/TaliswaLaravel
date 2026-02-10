@extends('layouts.app')

@section('title', 'Edit Winery Slide - Admin')

@section('body-class', 'admin-page')

@section('content')
    @include('admin.partials.nav')

    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Edit Winery Experience Slide</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('admin.winery-slides.update', $slide) }}"
                method="POST"
                enctype="multipart/form-data"
                class="card p-4 shadow-sm"
            >
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ old('title', $slide->title) }}"
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
                    >{{ old('description', $slide->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input
                        type="number"
                        class="form-control"
                        id="sort_order"
                        name="sort_order"
                        value="{{ old('sort_order', $slide->sort_order) }}"
                        min="0"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Current Image</label>
                    @if ($slide->image_path)
                        <img
                            src="{{ asset('storage/' . $slide->image_path) }}"
                            alt="{{ $slide->title }}"
                            class="img-fluid rounded mb-2"
                            style="max-width: 240px;"
                        >
                    @else
                        <p class="text-muted">No image uploaded.</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Replace Image (optional)</label>
                    <input
                        type="file"
                        class="form-control"
                        id="image"
                        name="image"
                        accept="image/*"
                    >
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.winery-slides.index') }}" class="btn btn-outline-secondary">
                        Back
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Update Slide
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

