<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @param  string|null  $role
         * @return mixed
         */
    public function handle($request, Closure $next, $role = null)
    {
        // if(auth()->check() && $role !== null && auth()->user()->role == $role)
        // {
        //     return redirect()->route('siswa.admin');
        // }

        if (!Auth::check()){
            return redirect()->route('layout.login');
        }

        if($role !== null && Auth::user()->role !== $role){
            return abort(403);
        }

        return $next($request);

    }
}
