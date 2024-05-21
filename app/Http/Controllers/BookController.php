<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BookController extends Controller
{

    public function ebook()
    {
        $books = Book::all();
        return view('admin.e-book', compact('books'));
    }

    public function editbuku(Book $book)
    {
        return view('admin.editbuku', compact('book'));
    }

    public function getBookData(Book $book) {
        return response()->json($book);
    }


    public function peminjaman(){
        return view('layout.peminjaman');
    }

    public function BacaBuku($id){
        $book = Book::findOrFail($id);
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.BacaBuku', compact('book', 'nama_lengkap'));
    }
    


    public function baruu(Request $request, Book $book)
    {
        $data = $request->validate([
            'author' => 'required',
            'judul' => 'required',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required',
        ]);

        $book->update($data);

        return redirect(route('admin.akun'));
    }

    public function pengaturan(Book $book)
    {
        return view('admin.pengaturan', ['Book' => $book]);
    }




    public function ShowBuku($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.showBuku', compact('book'));
    }

    public function buku($id)
    {
        $book = Book::findOrFail($id);
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.buku', compact('book', 'nama_lengkap'));
    }


    public function home()
    {
        $books = Book::all();
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.home', compact('books', 'nama_lengkap'));
        return response()->json($books);
    }

    public function favorit()
    {
        $books = Book::all();
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.favorit', compact('books', 'nama_lengkap'));
    }


    public function adminprof()
    {
        return view('admin.admin_profile');
    }


    public function admin()
    {
        $books = Book::all();
        return view('admin.e-book', ['books' => $books]);
    }





    public function hapus($id)
    {
        $books = Book::findOrFail($id);
        $books->delete();
        return redirect(route('admin.e-book'))->with("Success", "Siswa berhasil dihapus");
    }




    public function profile()
    {
        $books = Book::all();
        $user = Siswas::first();
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.profile', compact('books', 'nama_lengkap'));
    }




    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'judul' => 'required',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required',
            'url' => 'required'
        ]);

        Book::create([
            'author' => $request->author,
            'judul' => $request->judul,
            'image_url' => $request->gambar_url,
            'deskripsi' => $request->deskripsi,
            'isibuku' => $request->isibuku,
            'url' => $request->url
        ]);


        return redirect()->route('admin.e-book')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
