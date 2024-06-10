<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @extends('layout.navbar')
    @section('content')
    <div class="isibuk">
        <div class="lebihisi">
            @foreach ($books as $book)
                <div class="bookcont">
                    <div onclick="Buku('{{ $book->id }}')" class="bukunya">
                        <img src="{{ $book->image_url }}" alt="">
                        <div class="judull">
                            <h2>{{ $book->judul }}</h2>
                        </div>
                        <div class="desc">
                            <p>{{ $book->deskripsi }}</p>
                        </div>


                    </div>
                    <div class="fav">
                        <input onchange="toggleDataVisibility('{{ $book->id }}')"
                            id="ShowDataCheckBox_{{ $book->id }}" type="checkbox" value="{{ $book->id }}">
                        <label for="ShowDataCheckBox_{{ $book->id }}"></label>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @endsection

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
