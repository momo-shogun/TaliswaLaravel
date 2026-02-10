<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.team-members.create');
    }

    /**
     * Store a newly created team member in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['required', 'image', 'max:4096'],
        ]);

        $imagePath = $request->file('image')->store('team-members', 'public');

        TeamMember::create([
            'name' => $data['name'],
            'role' => $data['role'] ?? null,
            'description' => $data['description'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
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
        return view('admin.team-members.edit', [
            'member' => $teamMember,
        ]);
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(Request $request, TeamMember $teamMember): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $update = [
            'name' => $data['name'],
            'role' => $data['role'] ?? null,
            'description' => $data['description'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
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

