<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class BookController extends Controller
{



    public function storeRating(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',

        ]);

        $book = Book::findOrFail($id);

        Review::create([
            'book_id'=> $book->id,
            'rating'=> $request->rating,


        ]);

        $averageRating = Review::where('book_id', $book->id)->avg('rating');

        $book->rating = $averageRating;
        $book->save();

        return response()->json(['success' => true]);
    }

    public function editBukuPetugas($id)
    {
        $book = Book::findOrFail($id);
        return view('petugas.editBuku', compact('book'));
    }

    public function PetugasHome()
    {
        $books = Book::all();
        return view('petugas.PetugasHome',compact('books'));
    }

    public function ulas($id)
    {
        $book = Book::findOrFail($id);
        return view('layout.ulas', ['book' => $book]);
    }

    public function ebook()
    {
        $books = Book::all();
        return view('admin.e-book', compact('books'));
    }


    public function adminNavbar(){
        return view('admin.adminNavbar');
    }


    public function confrim(){
        return view('admin.confrim');
    }

    public function peminjam(){
        return view('layout.peminjam');
    }

    public function navbar($id){
        $book = Book::findOrFail($id);
        $nama_depan = session('nama_depan');
        $nama_belakang = session('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        return view('layout.navbar', compact('book', 'nama_lengkap'));
    }


    public function editBaca($id)
    {
        $book = Book::findOrFail($id);

        $isibuku = $book->isibuku;
    
        // Pisahkan konten menjadi paragraf-paragraf
        $paragrafs = explode("\n", $isibuku);
    
        // Gabungkan kembali paragraf-paragraf dengan tag <p>
        $formattedIsibuku = '';
        foreach ($paragrafs as $paragraph) {
            $formattedIsibuku .= '<p>' . $paragraph . '</p>';
        }
    
        return view('admin.editBaca', compact('book'));
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
            'isibuku' => 'required'
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

    public function BuatBuku()
    {
        return view('petugas.BuatBuku');
    }

    public function updateBuku(Request $request, Book $book)
    {

        $data = $request->validate([
            'author' =>'nullable' ,
            'judul'  =>'nullable',
            'gambar_url' =>'nullable|url',
            'deskripsi' =>'nullable' ,
            'url' =>'nullable|url' ,

        ]);

         $book->update($data);
        return redirect()->route('petugas.PetugasHome')->with('succes', 'Buku berhasil di tambahkan');
    }

    public function storess(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'judul' => 'required',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required',
            'url' => 'required',
            'paragraf1' => 'required',
            'paragraf2' => 'required',
            'paragraf3' => 'required',
            'paragraf4' => 'required'
        ]);
        Book::create([
            'author' => $request->author,
            'judul' => $request->judul,
            'image_url' => $request->gambar_url,
            'deskripsi' => $request->deskripsi,
            'isibuku' => $request->isibuku,
            'url' => $request->url,
            'paragraf1' => $request->paragraf1,
            'paragraf2' => $request->paragraf2,
            'paragraf3' => $request->paragraf3,
            'paragraf4' => $request->paragraf4,
        ]);

        return redirect()->route('petugas.PetugasHome');
    }


    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'judul' => 'required',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required',
            'url' => 'required',
            'paragraf1' => 'required',
            'paragraf2' => 'required',
            'paragraf3' => 'required',
            'paragraf4' => 'required'
        ]);

        Book::create([
            'author' => $request->author,
            'judul' => $request->judul,
            'image_url' => $request->gambar_url,
            'deskripsi' => $request->deskripsi,
            'isibuku' => $request->isibuku,
            'url' => $request->url,
            'paragraf1' => $request->paragraf1,
            'paragraf2' => $request->paragraf2,
            'paragraf3' => $request->paragraf3,
            'paragraf4' => $request->paragraf4,
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
