<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reject requests that exceed the configured max upload size.
 * Returns a friendly 413 page instead of the server's default.
 */
class CheckRequestSize
{
    /** Max request body size in bytes (2MB). */
    protected int $maxBytes = 2 * 1024 * 1024;

    public function handle(Request $request, Closure $next): Response
    {
        $contentLength = (int) $request->header('Content-Length', 0);

        if ($contentLength > 0 && $contentLength > $this->maxBytes) {
            abort(413, 'The file or data you are uploading is too large. Please use an image under 2MB.');
        }

        return $next($request);
    }
}
