<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryItemController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\BrandExperienceSlideController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TanomaClubMemberController;
use App\Http\Controllers\Admin\TanomaClubRewardController;
use App\Http\Controllers\Admin\WinerySlideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandExperienceController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TanomaClubController;
use App\Http\Controllers\TanomaClubJoinController;
use App\Http\Controllers\WineryExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Public pages
Route::get('/winery-experience', [WineryExperienceController::class, 'index'])
    ->name('winery-experience');

Route::get('/brand-experience', [BrandExperienceController::class, 'index'])
    ->name('brand-experience');

Route::get('/about-us', [AboutController::class, 'about'])
    ->name('about-us');

Route::get('/tanoma-club', [TanomaClubController::class, 'index'])
    ->name('tanoma-club');

Route::get('/collection', [CollectionController::class, 'index'])
    ->name('collection');

// Product iframe routes (for collection page modals)
Route::get('/taliswa1', fn () => view('taliswa1'))->name('collection.taliswa1');
Route::get('/taliswa2', fn () => view('taliswa2'))->name('collection.taliswa2');
Route::get('/taliswa3', fn () => view('taliswa3'))->name('collection.taliswa3');
Route::get('/taliswa4', fn () => view('taliswa4'))->name('collection.taliswa4');
Route::get('/taliswa5', fn () => view('taliswa5'))->name('collection.taliswa5');
Route::get('/taliswa6', fn () => view('taliswa6'))->name('collection.taliswa6');
Route::get('/nomad1', fn () => view('nomad1'))->name('collection.nomad1');
Route::get('/nomad2', fn () => view('nomad2'))->name('collection.nomad2');
Route::get('/nomad3', fn () => view('nomad3'))->name('collection.nomad3');

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
    Route::middleware(['admin.auth', 'check.request.size'])->group(function () {
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

        // Tanoma Club rewards (description section) – edit/update only
        Route::get('/tanoma-club-rewards', [TanomaClubRewardController::class, 'edit'])
            ->name('tanoma-club-rewards.edit');
        Route::put('/tanoma-club-rewards', [TanomaClubRewardController::class, 'update'])
            ->name('tanoma-club-rewards.update');

        // Gallery (home page carousel)
        Route::resource('gallery', GalleryItemController::class)
            ->except(['show'])
            ->names('gallery');
    });
});

