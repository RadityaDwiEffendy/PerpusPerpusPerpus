<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bacabku.css') }}">
</head>
<body>


    @extends('layout.navbar')
    @section('content')
    <div class="isibuk">
        <div class="lebihisi">


            <div class="conta">
                <div class="judulss">
                    <h2>{{ $book->judul }}</h2>
                </div>
                <div class="bcaa">
                    <div class="contar">
                        <div class="is">
                            <p>{{ $book->paragraf1 }}</p>
                        </div>
                        <div class="is">
                            <p>{{ $book->paragraf2 }}</p>
                        </div>
                        <div class="is">
                            <p>{{ $book->paragraf3 }}</p>
                        </div>
                        <div class="is">
                            <p>{{ $book->paragraf4 }}</p>
                        </div>

                    </div>
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