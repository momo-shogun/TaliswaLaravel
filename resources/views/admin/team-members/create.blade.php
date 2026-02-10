@extends('layouts.app')

@section('title', 'Add Team Member - Admin')

@section('body-class', 'admin-page')

@section('content')
    @include('admin.partials.nav')

    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Add Team Member</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
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
                        value="{{ old('role') }}"
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
                        Lower numbers appear first in the grid.
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
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Save Member
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

