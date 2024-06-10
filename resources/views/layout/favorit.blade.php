<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/fav.css') }}" rel="stylesheet">
</head>

<body>

    



   @extends('layout.navbar')
   @section('content')
   <div style="    height: 100vh;" class="isibuk">
    <div class="lebihisi">
        <div style="width: 100%; display: flex; justify-content: center; align-items: center">
            <h3>Favorit</h3>
        </div>
        <div style="height: 90vh; background-color: #c9b88b" id="dataContainer">
            @foreach ($books as $book)
                <div id="dataContainer_{{ $book->id }}" style="display: none;"></div>
            @endforeach
        </div>
    </div>
</div>
       
   @endsection

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dataContainer = document.getElementById('dataContainer');
            var books = @json($books);
            books.forEach(book => {
                var DataVisibility = localStorage.getItem('DataVisibility_' + book.id);
                if (DataVisibility === 'true') {
                    fetchDataAndDisplay(book.id);
                }
            });
        });


        
    </script>

</body>

</html>
