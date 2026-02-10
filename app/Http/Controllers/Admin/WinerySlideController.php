<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WinerySlide;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
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
        $sortOrdersTaken = WinerySlide::whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.winery-slides.create', [
            'sortOrdersTaken' => $sortOrdersTaken,
        ]);
    }

    /**
     * Store a newly created slide in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['required', 'integer', Rule::in(config('admin.sort_orders'))],
            'image' => ['required', 'image', 'max:4096'],
        ]);

        $imagePath = $request->file('image')->store('winery-slides', 'public');

        WinerySlide::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sort_order' => (int) $data['sort_order'],
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
        $sortOrdersTaken = WinerySlide::where('id', '!=', $winerySlide->id)
            ->whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.winery-slides.edit', [
            'slide' => $winerySlide,
            'sortOrdersTaken' => $sortOrdersTaken,
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
            'sort_order' => ['required', 'integer', Rule::in(config('admin.sort_orders'))],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $update = [
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sort_order' => (int) $data['sort_order'],
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

