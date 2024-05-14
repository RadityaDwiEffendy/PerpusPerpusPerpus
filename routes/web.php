<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return redirect(route('layout.login'));
});
Route::get('/navbar', function () {
    return view('layout.navbar');
});



Route::get('/login', [SiswaController::class, 'login'])->name('layout.login');
Route::get('/register/create', [SiswaController::class, 'register'])->name('layout.register');
Route::post('/register', [SiswaController::class, 'store'])->name('layout.store');
Route::get('/home', [SiswaController::class, 'home'])->name('layout.home');
Route::post('/login', [SiswaController::class, 'authenticate'])->name('login');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/home', 'HomeController@index')->middleware(CheckRole::class);
Route::get('/siswa/admin', [SiswaController::class, 'admin'])->name('siswa.admin');
Route::get('/layout/home', [BookController::class, 'home'])->name('layout.home');
Route::get('/layout/home/admin', [SiswaController::class, 'admin'])->name('admin.home');
Route::get('/layout/home/akun', [SiswaController::class, 'akun'])->name('admin.akun');
Route::delete('/layout/home/{siswa}/destroy', [SiswaController::class, 'destroy'])->name('admin.destroy');
Route::get('/layout/home/e-book', [BookController::class, 'ebook'])->name('admin.e-book');
Route::post('/layout/home/e-book', [BookController::class, 'store'])->name('admin.e-store');




