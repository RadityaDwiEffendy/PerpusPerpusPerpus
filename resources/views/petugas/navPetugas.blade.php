<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/aa_petugas/petuNav.css') }}">

</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('petugas.PetugasHome') }}">Buku</a>
            <a href="{{ route('petugas.confrim') }}">Peminjaman</a>

        </div>

        <button onclick="profile()" class="profile">
            <div class="gambar">
            </div>
            <ul>
                <p>petugas</p>
            </ul>
        </button>
    </div>

    <div class="container">
        @yield('petugas')
    </div>

</body>

</html>
