<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Profile Anda</p>
            </div>

            <div class="fotoprof">
                <div class="fotonya">

                </div>
            </div>

            <div class="form">
                <div class="sss">
                    <div class="nama">
                        <p>Nama lengkap : </p>
                        <h4>{{ $nama_lengkap }}</h4>
                    </div>
                    <div class="nama">
                        <p>username : </p>
                        <h4>{{ session('username') }}</h4>
                    </div>
                    <div class="nama">
                        <p>Password : </p>
                        <h4>{{ session('password') }}</h4>
                    </div>

                </div>
            </div>

            <div class="logout">
                <button onclick="logout()">
                    <p >Logout</p>
                </button>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>