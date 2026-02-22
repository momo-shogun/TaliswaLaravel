@extends('layouts.admin')

@section('title', 'Add Team Member - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Add Team Member (Image)</h1>

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
                        maxlength="255"
                    >
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input
                        type="text"
                        class="form-control"
                        id="role"
                        name="role"
                        value="{{ old('role') }}"
                        maxlength="255"
                        placeholder="e.g. Founder, Winemaker"
                    >
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
                        Position on the About Us page (1 = first).
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-secondary">
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
