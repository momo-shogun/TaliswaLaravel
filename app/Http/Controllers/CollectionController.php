<?php

namespace App\Http\Controllers;

/**
 * Public controller for the Collection (Products) page.
 */
class CollectionController extends Controller
{
    /**
     * Show the Collection / Fruit Wines page.
     */
    public function index()
    {
        return view('collection');
    }
}
