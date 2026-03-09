<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Services\ImageCompressionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

/**
 * Admin CRUD controller for gallery carousel items.
 */
class GalleryItemController extends Controller
{
    /**
     * Display a listing of the gallery items.
     */
    public function index(): View
    {
        $items = GalleryItem::orderBy('id')
            ->get();

        return view('admin.gallery.index', [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new gallery item.
     */
    public function create(): View
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created gallery item in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'image' => ['required', 'image', 'max:2048'],
        ]);

        $imagePath = app(ImageCompressionService::class)->compressAndStore(
            $request->file('image'),
            'gallery'
        );

        GalleryItem::create([
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('admin.gallery.index')
            ->with('status', 'Gallery item created successfully.');
    }

    /**
     * Show the form for editing the specified gallery item.
     */
    public function edit(GalleryItem $gallery): View
    {
        return view('admin.gallery.edit', [
            'item' => $gallery,
        ]);
    }

    /**
     * Update the specified gallery item in storage.
     */
    public function update(Request $request, GalleryItem $gallery): RedirectResponse
    {
        $data = $request->validate([
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $update = [];

        if ($request->hasFile('image')) {
            if ($gallery->image_path && Storage::disk('public')->exists($gallery->image_path)) {
                Storage::disk('public')->delete($gallery->image_path);
            }

            $update['image_path'] = app(ImageCompressionService::class)->compressAndStore(
                $request->file('image'),
                'gallery'
            );
        }

        $gallery->update($update);

        return redirect()
            ->route('admin.gallery.index')
            ->with('status', 'Gallery item updated successfully.');
    }

    /**
     * Remove the specified gallery item from storage.
     */
    public function destroy(GalleryItem $gallery): RedirectResponse
    {
        if ($gallery->image_path && Storage::disk('public')->exists($gallery->image_path)) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with('status', 'Gallery item deleted successfully.');
    }
}
