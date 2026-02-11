<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Handles footer "Subscribe" form submission.
 */
class SubscribeController extends Controller
{
    /**
     * Store the subscriber email. Returns JSON for AJAX (no redirect), else redirects back.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        Subscriber::firstOrCreate(
            ['email' => $request->input('email')],
            ['email' => $request->input('email')]
        );

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['message' => 'Thanks! You are subscribed.']);
        }

        return redirect()->back()->with('subscribed', 'Thanks! You are subscribed.');
    }
}
