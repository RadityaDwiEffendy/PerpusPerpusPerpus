<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/adminnav.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.e-book') }}">E-Book</a>
            <a href="{{ route('petugas.print') }}">Laporan</a>
        </div>
    
        <button onclick="adminprof()" class="profile">
            <div class="gambar">
    
            </div>
    
            
            <ul>
                <p>Admin</p>
            </ul>
        </button>
    
    
    
    </div>

    <div class="containing">
        @yield('kontent')
    </div>
    

</body>
</html>