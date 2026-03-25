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

                <div class="mb-4">
                    <label for="image_orientation" class="form-label fw-semibold">Image orientation</label>
                    <select class="form-select form-select-md" id="image_orientation" name="image_orientation" style="max-width: 280px;">
                        @foreach (\App\Models\GalleryItem::IMAGE_ORIENTATIONS as $deg)
                            <option value="{{ $deg }}" {{ (int) old('image_orientation', $item->image_orientation ?? 0) === $deg ? 'selected' : '' }}>
                                @if ($deg === 0)
                                    Normal (0°)
                                @else
                                    Rotate {{ $deg }}° clockwise
                                @endif
                            </option>
                        @endforeach
                    </select>
                    <div class="form-text mt-1">Use this if the image displays with wrong orientation (e.g. from phone photos).</div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold d-block">Current image</label>
                    @if ($item->image_path)
                        <div class="admin-gallery-preview border rounded bg-light p-1" style="max-width: 280px;">
                            <img
                                id="gallery-preview-img"
                                src="{{ asset('storage/' . $item->image_path) }}"
                                alt="Gallery preview"
                                class="img-fluid rounded"
                                style="display: block; max-width: 100%; height: auto; transform: rotate({{ (int) ($item->image_orientation ?? 0) }}deg);"
                            >
                        </div>
                    @else
                        <p class="text-muted mb-0">No image uploaded.</p>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-semibold">Replace image (optional)</label>
                    <input
                        type="file"
                        class="form-control"
                        id="image"
                        name="image"
                        accept="image/*"
                    >
                    <div class="form-text fw-semibold text-dark mt-1">Recommended size: 800 × 1000 px (4:5 aspect ratio) for the gallery carousel.</div>
                </div>

                <div class="d-flex justify-content-between pt-2">
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

@push('scripts')
    <script>
        (function () {
            var sel = document.getElementById('image_orientation');
            var img = document.getElementById('gallery-preview-img');
            if (sel && img) {
                sel.addEventListener('change', function () {
                    img.style.transform = 'rotate(' + this.value + 'deg)';
                });
            }
        })();
    </script>
@endpush
