<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TanomaClubMember;
use Illuminate\View\View;

/**
 * Admin: list of Tanoma Club members.
 */
class TanomaClubMemberController extends Controller
{
    /**
     * Display list of Tanoma Club members.
     */
    public function index(): View
    {
        $members = TanomaClubMember::orderByDesc('created_at')->get();

        return view('admin.tanoma-club-members.index', [
            'members' => $members,
        ]);
    }
}
