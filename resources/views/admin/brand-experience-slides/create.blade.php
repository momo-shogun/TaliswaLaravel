@extends('layouts.admin')

@section('title', 'Add Brand Experience Slide - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Add Brand Experience Slide</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.brand-experience-slides.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
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
                    <select class="form-select" id="sort_order" name="sort_order" required>
                        @foreach (config('admin.sort_orders') as $order)
                            @php $taken = in_array($order, $sortOrdersTaken ?? []); @endphp
                            <option value="{{ $order }}" {{ old('sort_order', 1) == $order ? 'selected' : '' }} {{ $taken ? 'disabled' : '' }}>
                                {{ $order }}@if($taken) (already taken)@endif
                            </option>
                        @endforeach
                    </select>
                    <div class="form-text">
                        Position in the carousel (1 = first).
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
                    <a href="{{ route('admin.brand-experience-slides.index') }}" class="btn btn-outline-secondary">
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
