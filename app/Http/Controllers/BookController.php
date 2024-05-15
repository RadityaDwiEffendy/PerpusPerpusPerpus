<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Siswas;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function ebook()
    {
        $books = Book::all();
        return view('admin.e-book', compact('books')); 
    }


    public function home()
    {
        $books = Book::all();       
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.home', compact('books', 'nama_lengkap'));
    }

    



    
    public function delete ($id){
        $books = Book::findOrFail($id);
        $books->delete();
        return redirect(route('admin.e-book'))->with("Success", "Siswa berhasil dihapus");
    }


    public function profile(){
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
            'judul' => 'required',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required',
        ]);
        
        Book::create([
            'judul' => $request->judul,
            'image_url' => $request->gambar_url,
            'deskripsi' => $request->deskripsi,
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
