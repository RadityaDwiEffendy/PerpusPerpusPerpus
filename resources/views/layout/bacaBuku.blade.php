<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/BacaBuku.css') }}">



</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a style="color: rgb(180, 180, 180)" href="">Buku</a>
            <a href="{{ route('layout.favorit') }}">Favorit</a>
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


    <div class="container">


        <div class="isibuk">
            <div class="lebihisi">
                
            </div>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
