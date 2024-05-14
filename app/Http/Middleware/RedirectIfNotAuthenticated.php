<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    public function handle(Request $request, Closure $next){
        if(!Auth::check()){
            return redirect()->route('layout.login');
        }

        return $next($request);
    }
}
