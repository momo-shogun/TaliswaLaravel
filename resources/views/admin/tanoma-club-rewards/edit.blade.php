@extends('layouts.admin')

@section('title', 'Tanoma Club Rewards - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <h1 class="h4 mb-3">Tanoma Club Rewards</h1>
            <p class="text-muted small mb-3">This content appears in the description section on the Tanoma Club page.</p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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
                action="{{ route('admin.tanoma-club-rewards.update') }}"
                method="POST"
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
                        value="{{ old('title', $reward->title) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="6"
                    >{{ old('description', $reward->description) }}</textarea>
                    <div class="form-text">
                        Shown in the section below the hero on the Tanoma Club page. You can use multiple paragraphs.
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
                        Back to Dashboard
                    </a>
                    <button type="submit" class="btn btn-dark">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
