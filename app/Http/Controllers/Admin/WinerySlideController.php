<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WinerySlide;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

/**
 * Admin CRUD controller for winery experience carousel slides.
 */
class WinerySlideController extends Controller
{
    /**
     * Display a listing of the winery slides.
     */
    public function index(): View
    {
        $slides = WinerySlide::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.winery-slides.index', [
            'slides' => $slides,
        ]);
    }

    /**
     * Show the form for creating a new slide.
     */
    public function create(): View
    {
        return view('admin.winery-slides.create');
    }

    /**
     * Store a newly created slide in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['required', 'image', 'max:4096'],
        ]);

        $imagePath = $request->file('image')->store('winery-slides', 'public');

        WinerySlide::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('admin.winery-slides.index')
            ->with('status', 'Winery slide created successfully.');
    }

    /**
     * Show the form for editing the specified slide.
     */
    public function edit(WinerySlide $winerySlide): View
    {
        return view('admin.winery-slides.edit', [
            'slide' => $winerySlide,
        ]);
    }

    /**
     * Update the specified slide in storage.
     */
    public function update(Request $request, WinerySlide $winerySlide): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $update = [
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($winerySlide->image_path && Storage::disk('public')->exists($winerySlide->image_path)) {
                Storage::disk('public')->delete($winerySlide->image_path);
            }

            $update['image_path'] = $request->file('image')->store('winery-slides', 'public');
        }

        $winerySlide->update($update);

        return redirect()
            ->route('admin.winery-slides.index')
            ->with('status', 'Winery slide updated successfully.');
    }

    /**
     * Remove the specified slide from storage.
     */
    public function destroy(WinerySlide $winerySlide): RedirectResponse
    {
        if ($winerySlide->image_path && Storage::disk('public')->exists($winerySlide->image_path)) {
            Storage::disk('public')->delete($winerySlide->image_path);
        }

        $winerySlide->delete();

        return redirect()
            ->route('admin.winery-slides.index')
            ->with('status', 'Winery slide deleted successfully.');
    }
}

