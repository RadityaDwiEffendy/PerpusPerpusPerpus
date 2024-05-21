<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function pinjam(){
        $donePeminjaman = Peminjaman::where('status', 'Dikembalikan')->with('book','siswa')->get();


        $peminjaman = Peminjaman::WhereNotIn('status',['Dipinjam', 'Dikembalikan'])->with('book','siswa')->get();

        $onGoingPeminjaman = Peminjaman::where('status','DIpinjam')->with('book','siswa')->get();


        $book = Book::all();

        return view('pinjam',[
            'peminjaman' => $peminjaman,
            'onGoingPeminjaman' => $onGoingPeminjaman,
            'donePeminjaman' => $donePeminjaman,
            'book' => $book,
        ]);
    }


    public function create($book_id){
        $book = Book::find($book_id);

        return view('layout.createPinjam',['book'=>$book]);
    }


    public function store(Request $request){
        $data = $request->validate([
            'siswa_id'=> 'required',
            'book_id'=> 'required',
            'tanggal_peminjaman',
            'status' => 'required'
        ]);

        Peminjaman::creat($data);

        return redirect('layout.buku')->with('succes', 'peminjaman berhasil');
    }


    public function creates($book_id){
        $book = Book::find($book_id);

        return view('editPeminjaman', ['book'=>$book]);
    }


    public function stores(Request $request, $id, $peminjaman_id){
        $data = $request->validate([
            'siswa_id'=> 'required',
            'book_id'=> 'required',
            'tanggal_peminjaman',
            'status' => 'required'
        ]);

        $data['tanggal_pengembalian'] = date('y-m-d', strtotime($data['tanggal_peminjaman']. '+ 7 days'));

        $peminjaman = Peminjaman::findOrFail($peminjaman_id);

        return redirect('layout.buku')->with('succes','buku berhasil di tambahkan');
        
    }



}
