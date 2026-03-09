<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Public controller for the home page.
 */
class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index(): View
    {
        return view('home');
    }
}
