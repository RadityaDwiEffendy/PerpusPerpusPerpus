<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/ulasan.css') }}">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Ulas Buku </p>
            </div>

            <div class="foro">
                @if (!$errors->isEmpty())
                    {{ $errors }}
                @endif

                <div class="ss">
                    <div class="namadpn">
    
                        <div class="id">
                            <div class="s">
                                <p>{{ $book->judul }}</p>
                                <div class="gmbr">
                                    <img src="{{ $book->image_url }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="ratingForm">
                        <div class="lbhrat">
                            <div class="rating">
                                <h4>Rate this book</h4>
                                <div class="stars">
    
                                    @for ($i = 5; $i >= 1; $i--)
                                        <input type="radio" id="star{{ $i }}" name="rating"
                                            value="{{ $i }}">
                                        <label for="star{{ $i }}">&#9733;</label>
                                    @endfor
    
                                </div>
    
                                <button onclick="submitRating({{ $book->id }})">Rating</button>
    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
