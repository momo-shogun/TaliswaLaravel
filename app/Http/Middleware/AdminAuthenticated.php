<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Simple session-based middleware to protect admin panel routes.
 *
 * It checks for a valid admin session key and, if missing, redirects
 * the user to the admin login page.
 */
class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        if (! $request->session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}

