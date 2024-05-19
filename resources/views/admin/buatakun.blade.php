<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/buatakun.css') }}">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Buat akun </p>
            </div>


            <div class="conta">
                <div class="buat">
                    <form method="POST" action="{{ route('admin.buat') }}">
                        @csrf
                        @method('post')
                        <div class="nama">
                            <p>Nama</p>
                            <input name="nama_depan" placeholder="nama depan" type="text">
                            <input name="nama_belakang" placeholder="nama belakang" type="text">
                        </div>
                        <div class="ussername">
                            <p>Ussername</p>
                            <input name="username" placeholder="username" type="text">
        
                        </div>
        
                        <div class="pass">
                            <p>Password</p>
                            <input name="password" placeholder="Password" type="password">
                        </div>
                        <div class="submit">
                            
                            <input value="Buat" type="submit">
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
