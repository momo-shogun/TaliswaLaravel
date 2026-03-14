@extends('layouts.admin')

@section('title', 'Edit Gallery Image - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Edit Gallery Image</h1>

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
                action="{{ route('admin.gallery.update', $item) }}"
                method="POST"
                enctype="multipart/form-data"
                class="card p-4 shadow-sm"
            >
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label d-block">Current Image</label>
                    @if ($item->image_path)
                        <img
                            src="{{ asset('storage/' . $item->image_path) }}"
                            alt="Gallery"
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
                    <div class="form-text">Max 2MB. Images are compressed automatically.</div>
                    <div class="form-text fw-semibold text-dark mt-1">Recommended size: 800 × 1000 px (4:5 aspect ratio) for the gallery carousel.</div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">
                        Back
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
