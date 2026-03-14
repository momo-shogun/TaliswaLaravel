@extends('layouts.admin')

@section('title', 'Winery Slides - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="h4 mb-0">Winery Experience Slides</h1>
                <a href="{{ route('admin.winery-slides.create') }}" class="btn btn-sm btn-dark">
                    + Add Slide
                </a>
            </div>

            <div class="alert alert-info py-2 mb-3" role="status">
                <strong>Recommended image size:</strong> 800 × 600 px (4:3 aspect ratio). Images are displayed in the Winery Experience section carousel and will be cropped to fit.
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($slides->isEmpty())
                <p>No slides found. Click “Add Slide” to create one.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Updated</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($slides as $slide)
                            <tr>
                                <td>{{ $slide->sort_order }}</td>
                                <td style="width: 120px;">
                                    @if ($slide->image_path)
                                        <img
                                            src="{{ asset('storage/' . $slide->image_path) }}"
                                            alt="{{ $slide->title }}"
                                            class="img-fluid rounded"
                                        >
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $slide->title }}</strong>
                                    @if ($slide->description)
                                        <div class="text-muted small">
                                            {{ \Illuminate\Support\Str::limit($slide->description, 80) }}
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $slide->updated_at?->format('Y-m-d H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.winery-slides.edit', $slide) }}" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('admin.winery-slides.destroy', $slide) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this slide?');"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
@endsection

