<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a style="color: rgb(226, 226, 226)" href="{{ route('admin.home') }}">Buku</a>
            <a href="{{ route('admin.e-book') }}">E-Book</a>
            <a href="{{ route('admin.akun') }}">Akun</a>
            <a href="">Sedang Diminta</a>
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
        
    </div>




</body>

</html>
