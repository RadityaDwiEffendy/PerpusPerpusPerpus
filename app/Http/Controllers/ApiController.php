<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function ebook()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }


    public function authenticate(Request $request)
{
    $credential = $request->only('username', 'password');

    $user = Siswas::where('username', $credential['username'])->first();

    if ($user && $credential['password'] == $user->password) {
        Auth::login($user);
        
        return response()->json([
            'success' => true,
            'message' => 'Login success'
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Invalid username or password'
        ], 401); // Unauthorized status code
    }
}



    // public function authenticate(Request $request)
    // {
    //     $credential = $request->only('username' , 'password');

    //     $user = Siswas::where('username', $credential['username'])->first();


    //     if($user && $credential['password'] == $user->password)
    //     {

            
    //         Auth::login('$user');

    //         return response()->json([
    //             'succes' => true,
    //             'message' => 'login success'
    //         ]);

    //     }else{
    //         return response()->json([
    //             'succes' => false,
    //             'message' => 'Invalid username or password'
    //         ]);
    //     }
    // }
}
