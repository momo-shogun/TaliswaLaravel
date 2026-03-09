<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\WinerySlide;
use Illuminate\View\View;

/**
 * Public controller for the Winery Experience page.
 */
class WineryExperienceController extends Controller
{
    /**
     * Show the Winery Experience page with ordered slides and gallery.
     */
    public function index(): View
    {
        $slides = WinerySlide::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        $galleryItems = GalleryItem::orderBy('id')
            ->get();

        return view('winery-experience', [
            'slides' => $slides,
            'galleryItems' => $galleryItems,
        ]);
    }
}

