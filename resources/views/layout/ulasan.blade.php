<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="ratingForm">
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
    </form>
</body>
</html>