<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/showBuku.css') }}">
</head>
<body>
    

    @extends('admin.adminNavbar')
    @section('kontent')
    <div class="isibuk">
        <div class="lebihisi">

            <div class="ingpo">

                <img src="{{ $book->image_url }}" alt="">

                <div class="isin">
                    <div class="author">
                        <h4>Author : </h4>
                        <p>{{ $book->author}}</p>
                    </div>
    
                    <div class="desk">
                        <h4>Deskripsi : </h4>
                        <p>{{ $book->deskripsi }}</p>
                    </div>
                </div>

            </div>
            <div class="buat">
                <div class="btnn">
                    <button onclick="setting('{{ $book->url }}')">
                        <p>Download</p>
                    </button>
                    <button onclick="EditBukuPengaturan(this)" data-book-id="{{ $book->id }}">
                        <p>Baca</p>
                    </button>


                </div>
            </div>
        </div>
    </div>
        
    @endsection
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

    </script>
</body>
</html>