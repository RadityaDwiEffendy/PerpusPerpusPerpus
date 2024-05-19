<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('layout.home') }}">Buku</a>
            <a style="color: rgb(180, 180, 180)" href="">Favorit</a>
            <a href="">Sedang Diminta</a>
            <a href="">Bantuan</a>
        </div>

        <button onclick="profile()" class="profile">
            <div class="gambar">
            </div>
            <ul>
                <p>{{ $nama_lengkap }}</p>
            </ul>
        </button>
    </div>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="isibuk">
        <div class="lebihisi">
            <div id="dataContainer"> </div>
        </div>
    </div>

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
