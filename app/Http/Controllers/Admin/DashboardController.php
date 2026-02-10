<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\WinerySlide;
use Illuminate\View\View;

/**
 * Simple admin dashboard showing a greeting and basic stats.
 */
class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        $teamMemberCount = TeamMember::count();
        $winerySlideCount = WinerySlide::count();

        return view('admin.dashboard', [
            'teamMemberCount' => $teamMemberCount,
            'winerySlideCount' => $winerySlideCount,
        ]);
    }
}

