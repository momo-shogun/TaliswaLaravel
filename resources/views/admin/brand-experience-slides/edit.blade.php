@extends('layouts.admin')

@section('title', 'Edit Brand Experience Slide - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Edit Brand Experience Slide</h1>

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
                action="{{ route('admin.brand-experience-slides.update', $slide) }}"
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
                    <select class="form-select" id="sort_order" name="sort_order" required>
                        @php
                            $currentOrder = in_array($slide->sort_order, config('admin.sort_orders')) ? $slide->sort_order : 1;
                        @endphp
                        @foreach (config('admin.sort_orders') as $order)
                            @php $taken = in_array($order, $sortOrdersTaken ?? []); @endphp
                            <option value="{{ $order }}" {{ old('sort_order', $currentOrder) == $order ? 'selected' : '' }} {{ $taken ? 'disabled' : '' }}>
                                {{ $order }}@if($taken) (already taken)@endif
                            </option>
                        @endforeach
                    </select>
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
                    <div class="form-text">
                        Recommended: 800 × 1000 px (4:5) for the Brand Experience carousel.
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Current Decoration (right panel)</label>
                    @if ($slide->decoration_image_path)
                        <img
                            src="{{ asset('storage/' . $slide->decoration_image_path) }}"
                            alt="Decoration"
                            class="img-fluid rounded mb-2 border"
                            style="max-width: 120px;"
                        >
                    @else
                        <p class="text-muted small">No decoration image.</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="decoration" class="form-label">Replace Decoration Image (optional)</label>
                    <input
                        type="file"
                        class="form-control"
                        id="decoration"
                        name="decoration"
                        accept="image/*"
                    >
                    <div class="form-text">
                        Shown in the bottom-right of the green panel. Use PNG or WebP to keep transparent background. Recommended: 400 × 400 px (1:1) or similar.
                    </div>
                </div>

                @if ($slide->decoration_image_path)
                <div class="mb-3 p-3 rounded" style="background-color: #395D4C; max-width: 280px; position: relative; min-height: 140px;">
                    <p class="small text-white mb-1 fw-bold">{{ $slide->title }}</p>
                    <p class="small text-white opacity-75 mb-0">{{ \Illuminate\Support\Str::limit(strip_tags($slide->description ?? ''), 60) }}</p>
                    <div style="position: absolute; right: 0.75rem; bottom: 0.75rem; width: 60px;">
                        <img src="{{ asset('storage/' . $slide->decoration_image_path) }}" alt="" class="img-fluid">
                    </div>
                </div>
                @endif

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.brand-experience-slides.index') }}" class="btn btn-outline-secondary">
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
