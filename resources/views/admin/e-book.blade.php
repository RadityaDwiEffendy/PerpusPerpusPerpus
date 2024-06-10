<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/e-book.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>

    
    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.e-book') }}">E-Book</a>
        </div>
    
        <button onclick="adminprof()" class="profile">
            <div class="gambar">
    
            </div>
    
            
            <ul>
                <p>Admin</p>
            </ul>
        </button>
    
    
    
    </div>

    <div class="container">
        <div class="buat">
            <div class="dlm">
                <button>
                    <a href="{{ route('books.create') }}">Buat buku</a>
                </button>
            </div>
        </div>

        <div class="isibuk">
            <div class="lebihisi">
                @foreach ($books as $book)
                <div onclick="editBuku('{{ $book->id }}')" class="bukunya">
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


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>


