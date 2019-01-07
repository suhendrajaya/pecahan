<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Principal
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role_id != 2) {
            return redirect('auth/logout');
        }

        return $next($request);
    }

}