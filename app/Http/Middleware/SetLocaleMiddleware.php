<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Str::contains($request->getPathInfo(), '_debugbar')) {
            $locale = $request->headers->get('Accept-Language', 'en');

            if (Str::length($locale) == 2) {
                App::setLocale($locale);
            }

        }

        return $next($request);
    }
}
