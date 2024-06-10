<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/showBuku1.css') }}">

    <style>

    </style>
</head>

<body style="overflow: hidden">
    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('layout.home') }}">Buku</a>
            <a href="{{ route('layout.favorit') }}">Favorit</a>
            <a href="{{ route('layout.peminjam') }}">Dipinjam</a>
        </div>

        <button onclick="profile()" class="profile">
            <div class="gambar">

            </div>


            <ul>
                <p>{{ $nama_lengkap }}</p>
            </ul>


        </button>



    </div>

    <div class="isibuk">
        <div class="lebihisi">

            <div class="ingpo">

                <img src="{{ $book->image_url }}" alt="">


                <div class="isin">
                    <div class="author">
                        <h4>Author : </h4>
                        <p>{{ $book->author }}</p>
                    </div>

                    <div class="desk">
                        <h4>Deskripsi : </h4>
                        <p>{{ $book->deskripsi }}</p>
                    </div>
                    <div class="rat">
                        <p></p>
                        <p>Rating :     &#9733;{{ $book->rating }}</p>
                    </div>
                </div>





            </div>


            <div class="buat">
                <div class="btnn">
                    <button onclick="setting('{{ $book->url }}')">
                        <p>Download</p>
                    </button>
                    <button onclick="baca(this)" data-book-id="{{ $book->id }}">
                        <p>Baca</p>
                    </button>
                    <button onclick="createPinjam({{ $book->id }})">
                        <p>Pinjam</p>
                    </button>

                </div>

            </div>


                

            







        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
