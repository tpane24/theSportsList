<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/participant/home');
        // }
        //
        // return $next($request);

        switch ($guard) {
          case 'client':
            if (Auth::guard($guard)->check()) {
              return redirect('/advertising/home');
            }
            break;

          default:
            if (Auth::guard($guard)->check()) {
              return redirect('/participant/home');
            }
            break;
        }
        return $next($request);
    }
}
