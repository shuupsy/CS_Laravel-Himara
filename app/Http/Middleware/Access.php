<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        /* Si user = Admin / Moderator / Editor */
        if($user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3) {
            return $next($request);
        } else {
            return view('pages.error404');
        }

    }
}
