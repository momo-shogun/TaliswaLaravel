@extends('layouts.app')

@section('title', 'Edit Team Member - Admin')

@section('body-class', 'admin-page')

@section('content')
    @include('admin.partials.nav')

    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Edit Team Member</h1>

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
                action="{{ route('admin.team-members.update', $member) }}"
                method="POST"
                enctype="multipart/form-data"
                class="card p-4 shadow-sm"
            >
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ old('name', $member->name) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role (optional)</label>
                    <input
                        type="text"
                        class="form-control"
                        id="role"
                        name="role"
                        value="{{ old('role', $member->role) }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description (optional)</label>
                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="4"
                    >{{ old('description', $member->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input
                        type="number"
                        class="form-control"
                        id="sort_order"
                        name="sort_order"
                        value="{{ old('sort_order', $member->sort_order) }}"
                        min="0"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Current Image</label>
                    @if ($member->image_path)
                        <img
                            src="{{ asset('storage/' . $member->image_path) }}"
                            alt="{{ $member->name }}"
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
                    <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-secondary">
                        Back
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Update Member
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

