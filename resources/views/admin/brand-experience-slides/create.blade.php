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
                        Recommended: 800 × 1000 px (4:5) for the Brand Experience carousel.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="decoration" class="form-label">Decoration image (right panel, optional)</label>
                    <input
                        type="file"
                        class="form-control"
                        id="decoration"
                        name="decoration"
                        accept="image/*"
                    >
                    <div class="form-text">
                        Shown in the bottom-right of the green panel. Use PNG or WebP to keep transparent background. Recommended: 400 × 400 px (1:1) or similar.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="decoration_size" class="form-label">Decoration size (px)</label>
                    <input
                        type="number"
                        class="form-control"
                        id="decoration_size"
                        name="decoration_size"
                        value="{{ old('decoration_size', 180) }}"
                        min="60"
                        max="300"
                        style="max-width: 120px;"
                    >
                    <div class="form-text">
                        Frontend par is slide ke decoration ka box size (square). 60–300 px.
                    </div>
                </div>

                <div class="mb-4">
                    <p class="form-label mb-2">Live preview</p>
                    <div class="brand-experience-preview rounded overflow-hidden border" style="max-width: 600px; background: #f5f0e8;">
                        <div class="row g-0">
                            <div class="col-6" style="aspect-ratio: 4/5; background: #E8DFD4; display: flex; align-items: center; justify-content: center;">
                                <img id="preview-slide-image" src="" alt="" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                                <span id="preview-slide-image-placeholder" class="text-muted small">Slide image</span>
                            </div>
                            <div class="col-6" style="background: #395D4C; padding: 1.25rem; position: relative; min-height: 200px; display: flex; flex-direction: column;">
                                <h3 id="preview-title" class="h6 text-white mb-2" style="font-weight: 500;">Title</h3>
                                <p id="preview-description" class="text-white small mb-0 opacity-75" style="flex: 1;">Description text.</p>
                                <div id="preview-decoration-wrapper" style="position: absolute; right: 1rem; bottom: 1rem; width: 180px; height: 180px; flex-shrink: 0;">
                                    <img id="preview-decoration-img" src="" alt="" style="width: 100%; height: 100%; object-fit: contain; display: none;">
                                    <span id="preview-decoration-placeholder" class="text-white-50 small">Decoration</span>
                                </div>
                            </div>
                        </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sizeInput = document.getElementById('decoration_size');
            var wrapper = document.getElementById('preview-decoration-wrapper');
            var titleInput = document.getElementById('title');
            var descInput = document.getElementById('description');
            var previewTitle = document.getElementById('preview-title');
            var previewDesc = document.getElementById('preview-description');
            var imageInput = document.getElementById('image');
            var decorationInput = document.getElementById('decoration');
            var previewSlideImg = document.getElementById('preview-slide-image');
            var previewSlidePlaceholder = document.getElementById('preview-slide-image-placeholder');
            var previewDecorationImg = document.getElementById('preview-decoration-img');
            var previewDecorationPlaceholder = document.getElementById('preview-decoration-placeholder');

            function updateDecorationSize() {
                var val = parseInt(sizeInput.value, 10);
                if (isNaN(val) || val < 60) val = 60;
                if (val > 300) val = 300;
                var px = val + 'px';
                wrapper.style.width = px;
                wrapper.style.height = px;
            }

            if (sizeInput && wrapper) {
                sizeInput.addEventListener('input', updateDecorationSize);
                sizeInput.addEventListener('change', updateDecorationSize);
                updateDecorationSize();
            }

            if (titleInput && previewTitle) {
                titleInput.addEventListener('input', function() { previewTitle.textContent = titleInput.value || 'Title'; });
                previewTitle.textContent = titleInput.value || 'Title';
            }
            if (descInput && previewDesc) {
                descInput.addEventListener('input', function() { previewDesc.textContent = descInput.value || 'Description text.'; });
                previewDesc.textContent = descInput.value || 'Description text.';
            }

            if (imageInput && previewSlideImg && previewSlidePlaceholder) {
                imageInput.addEventListener('change', function() {
                    var f = imageInput.files[0];
                    if (f) {
                        var r = new FileReader();
                        r.onload = function() { previewSlideImg.src = r.result; previewSlideImg.style.display = 'block'; previewSlidePlaceholder.style.display = 'none'; };
                        r.readAsDataURL(f);
                    } else {
                        previewSlideImg.src = ''; previewSlideImg.style.display = 'none'; previewSlidePlaceholder.style.display = 'inline';
                    }
                });
            }
            if (decorationInput && previewDecorationImg && previewDecorationPlaceholder) {
                decorationInput.addEventListener('change', function() {
                    var f = decorationInput.files[0];
                    if (f) {
                        var r = new FileReader();
                        r.onload = function() { previewDecorationImg.src = r.result; previewDecorationImg.style.display = 'block'; previewDecorationPlaceholder.style.display = 'none'; };
                        r.readAsDataURL(f);
                    } else {
                        previewDecorationImg.src = ''; previewDecorationImg.style.display = 'none'; previewDecorationPlaceholder.style.display = 'inline';
                    }
                });
            }
        });
    </script>
@endsection
