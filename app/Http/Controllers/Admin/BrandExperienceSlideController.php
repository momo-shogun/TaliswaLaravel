<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandExperienceSlide;
use App\Services\ImageCompressionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * Admin CRUD controller for brand experience carousel slides.
 */
class BrandExperienceSlideController extends Controller
{
    /**
     * Display a listing of the brand experience slides.
     */
    public function index(): View
    {
        $slides = BrandExperienceSlide::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.brand-experience-slides.index', [
            'slides' => $slides,
        ]);
    }

    /**
     * Show the form for creating a new slide.
     */
    public function create(): View
    {
        $sortOrdersTaken = BrandExperienceSlide::whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.brand-experience-slides.create', [
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

        $imagePath = app(ImageCompressionService::class)->compressAndStore(
            $request->file('image'),
            'brand-experience-slides'
        );

        BrandExperienceSlide::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'sort_order' => (int) $data['sort_order'],
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('admin.brand-experience-slides.index')
            ->with('status', 'Brand experience slide created successfully.');
    }

    /**
     * Show the form for editing the specified slide.
     */
    public function edit(BrandExperienceSlide $brandExperienceSlide): View
    {
        $sortOrdersTaken = BrandExperienceSlide::where('id', '!=', $brandExperienceSlide->id)
            ->whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.brand-experience-slides.edit', [
            'slide' => $brandExperienceSlide,
            'sortOrdersTaken' => $sortOrdersTaken,
        ]);
    }

    /**
     * Update the specified slide in storage.
     */
    public function update(Request $request, BrandExperienceSlide $brandExperienceSlide): RedirectResponse
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
            if ($brandExperienceSlide->image_path && Storage::disk('public')->exists($brandExperienceSlide->image_path)) {
                Storage::disk('public')->delete($brandExperienceSlide->image_path);
            }

            $update['image_path'] = app(ImageCompressionService::class)->compressAndStore(
                $request->file('image'),
                'brand-experience-slides'
            );
        }

        $brandExperienceSlide->update($update);

        return redirect()
            ->route('admin.brand-experience-slides.index')
            ->with('status', 'Brand experience slide updated successfully.');
    }

    /**
     * Remove the specified slide from storage.
     */
    public function destroy(BrandExperienceSlide $brandExperienceSlide): RedirectResponse
    {
        if ($brandExperienceSlide->image_path && Storage::disk('public')->exists($brandExperienceSlide->image_path)) {
            Storage::disk('public')->delete($brandExperienceSlide->image_path);
        }

        $brandExperienceSlide->delete();

        return redirect()
            ->route('admin.brand-experience-slides.index')
            ->with('status', 'Brand experience slide deleted successfully.');
    }
}
