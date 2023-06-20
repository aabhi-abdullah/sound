<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
{
    if (auth()->check() && auth()->user()->isAdmin()) {
        return $next($request);
    }

    return redirect('/index');
}

}