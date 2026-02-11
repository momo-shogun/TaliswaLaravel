<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\BrandExperienceSlideController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TanomaClubMemberController;
use App\Http\Controllers\Admin\WinerySlideController;
use App\Http\Controllers\BrandExperienceController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TanomaClubController;
use App\Http\Controllers\TanomaClubJoinController;
use App\Http\Controllers\WineryExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Public pages
Route::get('/winery-experience', [WineryExperienceController::class, 'index'])
    ->name('winery-experience');

Route::get('/brand-experience', [BrandExperienceController::class, 'index'])
    ->name('brand-experience');

Route::get('/about-us', [AboutController::class, 'about'])
    ->name('about-us');

Route::get('/tanoma-club', [TanomaClubController::class, 'index'])
    ->name('tanoma-club');

Route::post('/subscribe', [SubscribeController::class, 'store'])
    ->name('subscribe');

Route::post('/tanoma-club-join', [TanomaClubJoinController::class, 'store'])
    ->name('tanoma-club.join');

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

        // Admin dashboard
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // CRUD for winery experience slides
        Route::resource('winery-slides', WinerySlideController::class)
            ->except(['show'])
            ->names('winery-slides');

        // CRUD for brand experience slides
        Route::resource('brand-experience-slides', BrandExperienceSlideController::class)
            ->except(['show'])
            ->names('brand-experience-slides');

        // CRUD for team members
        Route::resource('team-members', TeamMemberController::class)
            ->except(['show'])
            ->names('team-members');

        // Subscribed (newsletter subscribers list)
        Route::get('/subscribed', [SubscriberController::class, 'index'])
            ->name('subscribed.index');

        // Tanoma Club members list
        Route::get('/tanoma-club-members', [TanomaClubMemberController::class, 'index'])
            ->name('tanoma-club-members.index');
    });
});

