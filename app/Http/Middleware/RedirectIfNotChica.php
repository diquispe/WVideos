<?php

namespace Xvideos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotChica
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'chicas')
    {
        if (!Auth::guard($guard)->check()) {
            //return view('chicas.create');
            //return "Estoy redirigiendo para el registro";
        }

        return $next($request);
    }
}
