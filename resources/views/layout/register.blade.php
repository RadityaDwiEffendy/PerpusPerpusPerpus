<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="isi">
            <div class="dalam">
                <h1 style="color: white">Register </h1>
                <form method="POST" action="{{ route('layout.store') }}">
                    @csrf
                    @method('post')
                    <div class="nama">
                        <p>Nama</p>
                        <input name="nama_depan" placeholder="nama depan" type="text">
                        <input name="nama_belakang" placeholder="nama belakang" type="text">
                    </div>
                    <div class="ussername">
                        <p style="color: white">Ussername</p>
                        <input name="username" placeholder="username" type="text">

                    </div>
    
                    <div class="pass">
                        <p style="color: white" >Password</p>
                        <input name="password" placeholder="Password" type="password">
                    </div>
                    <div class="submit">
                        
                        <input value="Register" type="submit">
                    </div>
                </form>

                <div class="register">
                    <p style="color: white;">sudah punya akun?</p>
                    <a href="{{ route('layout.login') }}">login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>