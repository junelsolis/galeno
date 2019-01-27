<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthorizePhysician
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

        $user = Auth::user();

        if (!$user->roles()->contains('physician')) {
          return redirect('/');
        }

        return $next($request);
    }
}
