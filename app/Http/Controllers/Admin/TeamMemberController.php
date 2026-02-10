<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * Admin CRUD controller for About Us "Our Team" members.
 */
class TeamMemberController extends Controller
{
    /**
     * Display a listing of the team members.
     */
    public function index(): View
    {
        $members = TeamMember::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.team-members.index', [
            'members' => $members,
        ]);
    }

    /**
     * Show the form for creating a new team member.
     */
    public function create(): View
    {
        $sortOrdersTaken = TeamMember::whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.team-members.create', [
            'sortOrdersTaken' => $sortOrdersTaken,
        ]);
    }

    /**
     * Store a newly created team member in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'sort_order' => ['required', 'integer', Rule::in(config('admin.sort_orders'))],
            'image' => ['required', 'image', 'max:4096'],
        ]);

        $imagePath = $request->file('image')->store('team-members', 'public');

        TeamMember::create([
            'sort_order' => (int) $data['sort_order'],
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('admin.team-members.index')
            ->with('status', 'Team member created successfully.');
    }

    /**
     * Show the form for editing the specified team member.
     */
    public function edit(TeamMember $teamMember): View
    {
        $sortOrdersTaken = TeamMember::where('id', '!=', $teamMember->id)
            ->whereIn('sort_order', config('admin.sort_orders'))
            ->pluck('sort_order')
            ->toArray();

        return view('admin.team-members.edit', [
            'member' => $teamMember,
            'sortOrdersTaken' => $sortOrdersTaken,
        ]);
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(Request $request, TeamMember $teamMember): RedirectResponse
    {
        $data = $request->validate([
            'sort_order' => ['required', 'integer', Rule::in(config('admin.sort_orders'))],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $update = [
            'sort_order' => (int) $data['sort_order'],
        ];

        if ($request->hasFile('image')) {
            if ($teamMember->image_path && Storage::disk('public')->exists($teamMember->image_path)) {
                Storage::disk('public')->delete($teamMember->image_path);
            }

            $update['image_path'] = $request->file('image')->store('team-members', 'public');
        }

        $teamMember->update($update);

        return redirect()
            ->route('admin.team-members.index')
            ->with('status', 'Team member updated successfully.');
    }

    /**
     * Remove the specified team member from storage.
     */
    public function destroy(TeamMember $teamMember): RedirectResponse
    {
        if ($teamMember->image_path && Storage::disk('public')->exists($teamMember->image_path)) {
            Storage::disk('public')->delete($teamMember->image_path);
        }

        $teamMember->delete();

        return redirect()
            ->route('admin.team-members.index')
            ->with('status', 'Team member deleted successfully.');
    }
}

