<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)

    {
        if (! Auth::check())
            return redirect('/login');
        if (Auth::user()->role!=0) // No es admin || 0 - Es admin | 2 - Es soporte | 3- Es usuario
            return redirect('/home');
        return $next($request);
    }
}
