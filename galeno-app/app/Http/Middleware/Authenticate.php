<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();

        if ($user->roles->count() > 1) {
            return redirect('app/switcher');
        } else {
            $roleName = $user->roles->first()->name;

            return redirect('app/'.$roleName);
        }

        return $next($request);
    }
}
