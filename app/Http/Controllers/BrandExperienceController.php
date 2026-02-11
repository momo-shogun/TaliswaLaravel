<?php

namespace App\Http\Controllers;

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
        return view('brand-experience');
    }
}
