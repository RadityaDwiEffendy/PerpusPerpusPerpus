<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Siswas;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;


class SiswaController extends Controller
{
    public function login()
    {
        return view('layout.login');
    }
    

    public function buatakun(){
        return view('admin.buatakun');
    }


    public function ebook()
    {
        return view('layout.e-book');
    }



    public function destroy($id)
    {
        $siswa = Siswas::findOrFail($id);
        $siswa->delete();
        return redirect(route('admin.akun'))->with("Success", "Siswa berhasil dihapus");
    }


    public function edit(Siswas $siswa){
        return view('admin.edit', ['siswa' => $siswa]);
        
    }




    public function register()
    {
        return view('layout.register');
    }

    public function akun()
    {
        $siswa = Siswas::all();
        return view('admin.akun', ['siswa' => $siswa]);
    }


    public function update(Request $request, Siswas $siswa){
        $data = $request->validate([
            'id'=>'required',
            'nama_depan'=> 'required',
            'password' => 'required'
        ]);

        $siswa->update($data);
        
        return redirect(route('admin.akun'));
    }

    public function buat(Request $request){
        $data = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $newSiswa = Siswas::create($data);

        return redirect(route('admin.akun'));
    }

    



    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $newSiswa = Siswas::create($data);

        return redirect(route('layout.login'));
    }



    public function authenticate(Request $request)
    {
        $credential = $request->only('username', 'password');

        $user = Siswas::where('username', $credential['username'])->first();

        if ($user && $credential['password'] == $user->password) {
            session()->put('nama_depan', $user->nama_depan);
            session()->put('nama_belakang', $user->nama_belakang);
            session()->put('username', $user->username);
            session()->put('password', $user->password);
            Auth::login($user);
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect('/layout/home/admin');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('/layout/home');
            }
        }

        return redirect()->route('layout.login')->with('error', 'Username atau password salah');
    }
}
