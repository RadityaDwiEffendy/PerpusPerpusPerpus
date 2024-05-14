<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    <style>
        .book img{
            widows: 120px;
            height: 120px;
        }

        .book{
            
            width: 200px;
            height: 200px;
            border: 1px solid black
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>
    <div>
        @foreach($books as $book)
        <div class="book">
            <div class="judul">
                <h2>{{ $book->judul }}</h2>
            </div>
            <img src="{{ $book->image_url }}" alt="{{ $book->judul }}">
            <p>{{ $book->deskripsi }}</p>
        </div>
        @endforeach
    </div>

    <div class="">
        <a href="{{ route('books.create') }}">buat buku</a>
    </div>
</body>
</html>
