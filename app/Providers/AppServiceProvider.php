<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // When document root is not "public" (e.g. Hostinger), set APP_URL in .env with /public
        // so asset() and route() work. Force root URL from .env so it works even if config is cached.
        $appUrl = env('APP_URL');
        if ($appUrl) {
            URL::forceRootUrl(rtrim($appUrl, '/'));
        }
    }
}
