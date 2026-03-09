@extends('layouts.admin')

@section('title', 'Gallery - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="h4 mb-0">Gallery</h1>
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-sm btn-dark">
                    + Add Image
                </a>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($items->isEmpty())
                <p>No gallery images found. Click "Add Image" to create one.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Updated</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="width: 120px;">
                                    @if ($item->image_path)
                                        <img
                                            src="{{ asset('storage/' . $item->image_path) }}"
                                            alt="Gallery {{ $item->id }}"
                                            class="img-fluid rounded"
                                        >
                                    @endif
                                </td>
                                <td>{{ $item->updated_at?->format('Y-m-d H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.gallery.edit', $item) }}" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('admin.gallery.destroy', $item) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this image?');"
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
