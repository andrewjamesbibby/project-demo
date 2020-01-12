<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        app()->setLocale(cache('applocale') ?? 'en');
        return $next($request);
    }
}
