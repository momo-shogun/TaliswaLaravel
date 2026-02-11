<?php

namespace App\Http\Controllers;

use App\Models\TanomaClubMember;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Handles Tanoma Club "Join Now" form (name + email). Email must be unique.
 */
class TanomaClubJoinController extends Controller
{
    /**
     * Store a new Tanoma Club member. Returns JSON for AJAX.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:tanoma_club_members,email'],
        ], [
            'email.unique' => 'This email is already registered.',
        ]);

        TanomaClubMember::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return response()->json(['message' => 'Thanks! You have joined the Tanoma Club.']);
    }
}
