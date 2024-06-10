<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Siswas;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{

    public function confrim()
    {
        $user = Auth::user();

        $donePeminjaman = Peminjaman::where('status', 'Dikembalikan')

            ->with('book', 'user')
            ->get();

        $peminjamans = Peminjaman::whereNotIn('status', ['Dipinjam', 'Dikembalikan'])
            ->with('book', 'user')
            ->get();

        $ongoingPeminjamans = Peminjaman::where('status', 'Dipinjam')
            ->with('book', 'user')
            ->get();

        
            foreach ($ongoingPeminjamans as $peminjaman){
                $peminjaman->denda = $peminjaman->calculateDenda();
                $peminjaman->save(); 
            }


        $books = Book::all();

        return view('petugas.confrim', [
            'peminjamans' => $peminjamans,
            'ongoingPeminjamans' => $ongoingPeminjamans,
            'donePeminjaman' => $donePeminjaman,
            'books' => $books,
        ]);

        
    }

    public function print(){
        $user = Auth::user();

        $donePeminjaman = Peminjaman::where('status', 'Dikembalikan')

            ->with('book', 'user')
            ->get();

        $peminjamans = Peminjaman::whereNotIn('status', ['Dipinjam', 'Dikembalikan'])
            ->with('book', 'user')
            ->get();

        $ongoingPeminjamans = Peminjaman::where('status', 'Dipinjam')
            ->with('book', 'user')
            ->get();


        $books = Book::all();

        return view('petugas.print', [
            'peminjamans' => $peminjamans,
            'ongoingPeminjamans' => $ongoingPeminjamans,
            'donePeminjaman' => $donePeminjaman,
            'books' => $books,
        ]);
    }

    public function pinjam()
    {
        $donePeminjaman = Peminjaman::where('status', 'Dikembalikan')->with('book', 'siswa')->get();


        $peminjaman = Peminjaman::WhereNotIn('status', ['Dipinjam', 'Dikembalikan'])->with('book', 'siswa')->get();

        $onGoingPeminjaman = Peminjaman::where('status', 'Dipinjam')->with('book', 'siswa')->get();


        $book = Book::all();

        return view('pinjam', [
            'peminjaman' => $peminjaman,
            'onGoingPeminjaman' => $onGoingPeminjaman,
            'donePeminjaman' => $donePeminjaman,
            'book' => $book,
        ]);
    }



    public function createPinjam($book_id)
    {
        $book = Book::find($book_id);
        return view('layout.createPinjam', ['book' => $book, 'book_id' => $book_id]);
    }






    public function storee(Request $request)
    {
        $data = $request->validate([
            'siswa_id' => 'required',
            'book_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status' => 'required',


        ]);

        Peminjaman::create($data);

        return redirect('/layout/home')->with('succes', 'peminjaman berhasil');
    }


    public function creates($book_id)
    {
        $book = Book::find($book_id);

        return view('admin.editPeminjaman', ['book' => $book]);
    }

// Di dalam PeminjamanController
public function denda($book_id, $peminjaman_id)
{
    $peminjaman = Peminjaman::findOrFail($peminjaman_id);
    $book = $peminjaman->book; 

    return view('admin.editDenda', [
        'book' => $book, 
    ]);
}







    public function stores(Request $request, $id, $peminjaman_id)
    {
        $data = $request->validate([
            'siswa_id',
            'book_id',
            'tanggal_peminjaman',
            'status' => 'required',

        ]);



        $peminjaman = Peminjaman::findOrFail($peminjaman_id);

        $peminjaman->update($data);

        return redirect('/layout/home/petugas/confrim')->with('success', 'Buku berhasil ditambahkan');
    }

    public function dendas(Request $request,$id, $peminjaman_id)
    {
        $data = $request->validate([
            'siswa_id',
            'book_id',
            'status' => 'required',
            'denda' => 'required|integer'
        ]);
        $peminjaman = Peminjaman::findOrFail($peminjaman_id);


        if($data['denda'] == 2000 && $peminjaman->status == 'dipinjam'){
            $today = Carbon::now();
            $tanggal_pengembalian = Carbon::parse($peminjaman->tanggal_pengembalian);

            if($today->greaterThan($tanggal_pengembalian)){
                $daylater = $today->diffInDays($tanggal_pengembalian);
                $peminjaman->denda = $daylater * 2000;
            }else{
                $peminjaman->denda = 0;
            }
        }else{
            $peminjaman->denda = $data['status'];
        }

        $peminjaman->denda = $data['status'];



  
        $peminjaman->status = $request->input()['status'];
        $peminjaman->update($data);

        return redirect('/layout/home/petugas/confrim')->with('success', 'Buku berhasil ditambahkan');
    }

    public function peminjam()
    {
        $user = Auth::user();

        $donePeminjaman = Peminjaman::where('status', 'Dikembalikan')
            ->where('siswa_id', $user->id)
            ->with('book', 'user')
            ->get();

        $peminjamans = Peminjaman::whereNotIn('status', ['Dipinjam', 'Dikembalikan'])
            ->where('siswa_id', $user->id)
            ->with('book', 'user')
            ->get();

        $ongoingPeminjamans = Peminjaman::where('status', 'Dipinjam')
        ->where('siswa_id', $user->id)
            ->with('book', 'user')
            ->get();

        $books = Book::all();

        return view('layout.peminjam', [
            'peminjamans' => $peminjamans,
            'ongoingPeminjamans' => $ongoingPeminjamans,
            'donePeminjaman' => $donePeminjaman,
            'books' => $books,
        ]);
    }
}
