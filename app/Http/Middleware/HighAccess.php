<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HighAccess
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

        /* Si utilisateur = Admin / Moderator */
        if($user->id == 1 || $user->id == 2) {
            return $next($request);
        } else {
            return view('pages.error404');
        }
    }
}
