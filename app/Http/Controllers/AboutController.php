<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

/**
 * Public controller for the About Us page.
 */
class AboutController extends Controller
{
    /**
     * Show the About Us page with the dynamic team section.
     */
    public function about()
    {
        $teamMembers = TeamMember::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('about-us', [
            'teamMembers' => $teamMembers,
        ]);
    }
}

