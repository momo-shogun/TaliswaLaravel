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
    /** Max request body size in bytes (100MB) – large GIFs/uploads; still bounded by PHP post_max_size. */
    protected int $maxBytes = 100 * 1024 * 1024;

    public function handle(Request $request, Closure $next): Response
    {
        $contentLength = (int) $request->header('Content-Length', 0);

        if ($contentLength > 0 && $contentLength > $this->maxBytes) {
            abort(413, 'The file or data you are uploading is too large. Try a smaller file or ask your host to raise PHP upload limits (post_max_size / upload_max_filesize).');
        }

        return $next($request);
    }
}
