<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Deprecated: CORS is now handled globally by
     * \Illuminate\Http\Middleware\HandleCors using config/cors.php.
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}