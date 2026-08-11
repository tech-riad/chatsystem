<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle($request, Closure $next)
    {

        if (auth()->check() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super Admin'))) {
            return $next($request);
        }

        abort(403);

    }
}
