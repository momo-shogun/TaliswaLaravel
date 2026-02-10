<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\WinerySlideController;
use App\Http\Controllers\WineryExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Public pages
Route::get('/winery-experience', [WineryExperienceController::class, 'index'])
    ->name('winery-experience');

Route::get('/about-us', [AboutController::class, 'about'])
    ->name('about-us');

// Admin panel routes
Route::prefix('admin-panel')->name('admin.')->group(function () {
    // Login routes (no auth middleware)
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [AdminAuthController::class, 'login'])
        ->name('login.submit');

    // Routes that require the admin session
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])
            ->name('logout');

        // Admin home redirects to winery slides index
        Route::get('/', function () {
            return redirect()->route('admin.winery-slides.index');
        })->name('dashboard');

        // CRUD for winery experience slides
        Route::resource('winery-slides', WinerySlideController::class)
            ->except(['show'])
            ->names('winery-slides');

        // CRUD for team members
        Route::resource('team-members', TeamMemberController::class)
            ->except(['show'])
            ->names('team-members');
    });
});

