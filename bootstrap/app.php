<?php

use App\Http\Middleware\AdminAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Register a simple alias for admin authentication middleware
        $middleware->alias([
            'admin.auth' => AdminAuthenticated::class,
            'check.request.size' => \App\Http\Middleware\CheckRequestSize::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->renderable(function (\Symfony\Component\HttpKernel\Exception\HttpException $e) {
            if ($e->getStatusCode() === 413) {
                return response()->view('errors.413', [
                    'message' => $e->getMessage() ?: 'The file or data you are uploading is too large. Please use an image under 2MB.',
                ], 413);
            }
        });
    })->create();
