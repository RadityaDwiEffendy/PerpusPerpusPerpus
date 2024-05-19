<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a style="color: rgb(180, 180, 180)"   href="">Buku</a>
            <a href="">Favorit</a>
            <a href="">Sedang Diminta</a>
            <a href="">Bantuan</a>
        </div>

        <button onclick="profile()" class="profile">
            <div class="gambar">
                
            </div>


            <ul>
                <p>{{ $nama_lengkap }}</p>
            </ul>

            
        </button>



    </div>


        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        
        <div class="isibuk">
            <div class="lebihisi">
                @foreach ($books as $book)
                <div onclick="Buku('{{ $book->id }}')" class="bukunya">
                    <img src="{{ $book->image_url }}" alt="">
                    <div class="judull">
                        <h2>{{ $book->judul }}</h2>
                    </div>

                    <div class="desc">
                        <p>{{ $book->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
