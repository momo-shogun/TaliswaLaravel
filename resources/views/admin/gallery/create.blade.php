@extends('layouts.admin')

@section('title', 'Add Gallery Image - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Add Gallery Image</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
                @csrf

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
                    <div class="form-text">Max 2MB. Images are compressed automatically.</div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
