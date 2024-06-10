<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Middleware\CheckRole;
use App\Models\Peminjaman;
use App\Models\Siswas;

Route::get('/', function () {
    return redirect(route('layout.login'));
});
Route::get('/navbar', function () {
    return view('layout.navbar');
});

Route::get('/navbar', [BookController::class, 'navbar'])->name('layout.navbar');


Route::get('/login', [SiswaController::class, 'login'])->name('layout.login');

Route::post('/logout', [SiswaController::class, 'logout'])->name('layout.logout');

Route::get('/register/create', [SiswaController::class, 'register'])->name('layout.register');
Route::post('/register', [SiswaController::class, 'store'])->name('layout.store');
Route::get('/home', [SiswaController::class, 'home'])->name('layout.home');
Route::post('/login', [SiswaController::class, 'authenticate'])->name('login');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
//
Route::get('/home', 'HomeController@index')->middleware(CheckRole::class);
Route::get('/siswa/admin', [SiswaController::class, 'admin'])->name('siswa.admin');

//
Route::middleware(['auth'])->group(function(){
    Route::get('/layout/peminjam', [PeminjamanController::class, 'peminjam'])->name('layout.peminjam');
});

Route::get('/layout/peminjam/{book}/ulas', [BookController::class, 'ulas'])->name('layout.ulas');
Route::post('/rating/{id}', [BookController::class, 'storeRating']);

Route::get('/layout/home', [BookController::class, 'home'])->name('layout.home');
Route::get('/layout/favorit', [BookController::class, 'favorit'])->name('layout.favorit');
Route::get('/api/books/{book}', [BookController::class, 'getBookData']);
Route::get('/layout/home/dashboard', [SiswaController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/home/{Book}/buku', [BookController::class, 'buku'])->name('layout.buku');


Route::get('/home/{Book}/buku/peminjaman', [BookController::class, 'peminjaman'])->name('layout.peminjaman');
Route::get('/home/{Book}/buku/BacaBuku', [BookController::class, 'BacaBuku'])->name('layout.BacaBuku');


//
Route::get('/home/{Book}/buku/createPinjam', [PeminjamanController::class, 'createPinjam'])->name('layout.createPinjam');
Route::post('/home/{Book}/buku/edit/{book_id}', [PeminjamanController::class, 'storee'])->name('layout.storee');
Route::get('/layout/home/{Book}/confirm/edit/{id}', [PeminjamanController::class, 'creates']);
Route::post('/layout/home/{Book}/confirm/edit/{id}', [PeminjamanController::class, 'stores'])->name('admin.stores');

Route::get('/layout/home/{Book}/confirm/denda/{id}', [PeminjamanController::class, 'denda']);
Route::post('/layout/home/{Book}/confirm/denda/{id}', [PeminjamanController::class, 'dendas'])->name('admin.dendas');

//admin
Route::get('/layout/home/petugas/confrim', [PeminjamanController::class, 'confrim'])->name('petugas.confrim');
Route::get('/print', [PeminjamanController::class, 'print'])->name('petugas.print');

Route::get('/n', [BookController::class, 'confrim'])->name('admin.adminNavbar');

Route::get('/layout/home/admin', [BookController::class, 'admin'])->name('admin.home');

Route::delete('/layout/home/{siswa}/destroy', [SiswaController::class, 'destroy'])->name('admin.destroy');
Route::get('/layout/home/e-book', [BookController::class, 'ebook'])->name('admin.e-book');
Route::post('/layout/home/e-book', [BookController::class, 'store'])->name('admin.store');
Route::delete('/layout/home/{siswa}/hapus', [BookController::class, 'hapus'])->name('admin.hapus');
Route::get('/layout/profile', [BookController::class, 'profile'])->name('layout.profile');
Route::get('/layout/home/{siswa}/edit', [SiswaController::class, 'edit'])->name('admin.edit');
Route::put('/layout/home/{siswa}/update', [SiswaController::class, 'update'])->name('admin.update');
Route::get('/layout/home/buatakun/buata', [SiswaController::class, 'buatakun'])->name('admin.buatakun');
Route::post('/layout/home/buatakun', [SiswaController::class, 'buat'])->name('admin.buat');
Route::get('/layout/home/buku', [SiswaController::class, 'buku'])->name('admin.book');



Route::get('/layout/home/profile', [BookController::class, 'adminprof'])->name('admin.admin_profile');
Route::get('/layout/home/{Book}/buku', [BookController::class, 'ShowBuku'])->name('admin.ShowBuku');
Route::get('/layout/home/{Book}/buku/pengaturan', [BookController::class, 'pengaturan'])->name('admin.pengaturan');


Route::get('/layout/home/{Book}/buku/editBaca', [BookController::class, 'editBaca'])->name('admin.editBaca');


//petugas


Route::get('/layout/home/petugas', [BookController::class, 'PetugasHome'])->name('petugas.PetugasHome');
Route::get('/layout/home/petugas/create', [BookController::class, 'BuatBuku'])->name('petugas.BuatBuku');
Route::post('/layout/home/petugas/create', [BookController::class, 'storess'])->name('petugas.storess');
Route::get('/layout/home/petugas/{book}/edit', [BookController::class, 'editBukuPetugas'])->name('petugas.editBuku');
Route::put('/layout/home/petugas/{book}/update', [BookController::class, 'updateBuku'])->name('petugas.updates');