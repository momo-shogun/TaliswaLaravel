<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TanomaClubReward;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Admin controller for editing the Tanoma Club rewards (description) content.
 */
class TanomaClubRewardController extends Controller
{
    /**
     * Show the form for editing the Tanoma Club rewards content.
     */
    public function edit(): View
    {
        $reward = TanomaClubReward::getSingleton();

        return view('admin.tanoma-club-rewards.edit', [
            'reward' => $reward,
        ]);
    }

    /**
     * Update the Tanoma Club rewards content.
     */
    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $reward = TanomaClubReward::getSingleton();
        $reward->update([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
        ]);

        return redirect()
            ->route('admin.tanoma-club-rewards.edit')
            ->with('status', 'Tanoma Club rewards content updated successfully.');
    }
}
