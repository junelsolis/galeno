<?php

namespace App\Http\Middleware;

use Closure;

class CheckForMultirole
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
        $user = auth()->user();

        if ($user->roles->count() > 1) {
            return redirect('app/switcher');
        }

        return $next($request);

        return $next($request);
    }
}
