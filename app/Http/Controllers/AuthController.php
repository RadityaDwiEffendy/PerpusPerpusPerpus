<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credential = $request->only('username', 'password');

        if(Auth::attempt($credential))
        {
            if(Auth::user()->role === 'admin')
            {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('layout.home');
            }
        }

        return redirect()->route('layout.login')->with('error', 'Email atau password salah');

    }
}
