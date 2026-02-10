<?php

namespace App\Http\Controllers;

use App\Models\WinerySlide;

/**
 * Public controller for the Winery Experience page.
 */
class WineryExperienceController extends Controller
{
    /**
     * Show the Winery Experience page with ordered slides.
     */
    public function index()
    {
        $slides = WinerySlide::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('winery-experience', [
            'slides' => $slides,
        ]);
    }
}

