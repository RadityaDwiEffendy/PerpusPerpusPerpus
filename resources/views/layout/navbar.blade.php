<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

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

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
