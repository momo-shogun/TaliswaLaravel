<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

/**
 * Minimal email/password based authentication for the admin panel.
 *
 * This controller does not use Laravel's full auth scaffolding on purpose;
 * it simply relies on a single AdminUser record and a session key.
 */
class AuthController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming login request.
     *
     * This implementation uses a simple username + password pair and
     * does not support password reset or multiple admins.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // We treat the "name" column on AdminUser as the username.
        $admin = AdminUser::where('name', $credentials['username'])->first();

        if (! $admin || ! Hash::check($credentials['password'], $admin->password)) {
            return back()
                ->withInput($request->only('username'))
                ->withErrors([
                    'username' => 'The provided credentials do not match our records.',
                ]);
        }

        // Store the admin identifier in the session to mark them as authenticated.
        $request->session()->put('admin_id', $admin->id);

        return redirect()
            ->route('admin.winery-slides.index')
            ->with('status', 'You are now logged in to the admin panel.');
    }

    /**
     * Log the admin out and destroy the session.
     */
    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('status', 'You have been logged out.');
    }
}

