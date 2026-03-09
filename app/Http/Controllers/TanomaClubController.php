<?php

namespace App\Http\Controllers;

use App\Models\TanomaClubReward;
use Illuminate\View\View;

/**
 * Public controller for the Tanoma Club page.
 */
class TanomaClubController extends Controller
{
    /**
     * Show the Tanoma Club page.
     */
    public function index(): View
    {
        $reward = TanomaClubReward::getSingleton();

        return view('tanoma-club', [
            'reward' => $reward,
        ]);
    }
}
