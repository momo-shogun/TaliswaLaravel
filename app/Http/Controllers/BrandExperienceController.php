<?php

namespace App\Http\Controllers;

use App\Models\BrandExperienceSlide;

/**
 * Public controller for the Brand Experience page.
 */
class BrandExperienceController extends Controller
{
    /**
     * Show the Brand Experience page with the brand carousel.
     */
    public function index()
    {
        $slides = BrandExperienceSlide::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('brand-experience', [
            'slides' => $slides,
        ]);
    }
}
