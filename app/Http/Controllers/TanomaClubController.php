<?php

namespace App\Http\Controllers;

/**
 * Public controller for the Tanoma Club page.
 */
class TanomaClubController extends Controller
{
    /**
     * Show the Tanoma Club page.
     */
    public function index()
    {
        return view('tanoma-club');
    }
}
