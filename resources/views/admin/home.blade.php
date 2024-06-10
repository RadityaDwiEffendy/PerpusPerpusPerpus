<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">



</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a  style="color: rgb(226, 226, 226)" href="{{ route('admin.home') }}">Buku</a>
            <a  href="{{ route('admin.e-book') }}">E-Book</a>
            <a href="{{ route('admin.akun') }}">Akun</a>
            <a href="{{ route('admin.confrim') }}">Sedang Diminta</a>
        </div>

        <button class="profile">
            <div class="gambar">
                
            </div>


            <ul>
                <li>Admin</li>
            </ul>
        </button>



    </div>


    <div class="container">

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

</body>

</html>


