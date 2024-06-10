<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\Siswas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function dashboard()
     {

     
       $bookCount = Book::count();
       $totalAccounts = Siswas::count();
       

         return view('admin.dashboard', ['totalAccounts' => $totalAccounts, 'bookCount' => $bookCount]);

     }

}