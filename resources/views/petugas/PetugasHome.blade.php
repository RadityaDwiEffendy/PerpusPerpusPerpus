<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/aa_petugas/book.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('petugas.NavPetugas')
    @section('petugas')
    <div class="container">
        <div class="buat">
            <div class="dlm">
                <button>
                    <a href="{{ route('petugas.BuatBuku') }}">Buat buku</a>
                </button>
            </div>
        </div>

        <div class="isibuk">
            <div class="lebihisi">
                @foreach ($books as $book)
                <div class="bukunya">
                    <img src="{{ $book->image_url }}" alt="">
                    <div class="judull">
                        <h2>{{ $book->judul }}</h2>
                        
                    </div>

                    <div class="desc">
                        <p>{{ $book->deskripsi }}</p>
                    </div>

                   

                    <div class="edit">
                        <button onclick="editPetugas('{{ $book->id }}')" >Edit</button>
                    </div>

                    <form method="POST" action="{{ route('admin.hapus', ['siswa' => $book->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>

                </div>
                
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>