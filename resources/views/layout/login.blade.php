<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <style>
        .error-input input[type="text"],
        .error-input input[type="password"] {
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="isi">
            <div class="dalam">
                <h1>Login </h1>

                @if (session('error'))
                    <div class="error-message">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @method('post')
                    <div class="nama {{ session('error')? 'error-input': ''}}">
                        <p>Ussername</p>
                        <input name="username" placeholder="ussername" type="text">
                    </div>

    
                    <div class="pass {{ session('error')? 'error-input' : '' }}">
                        <p>Password</p>
                        <input name="password" placeholder="Password" type="password">
                    </div>
                    <div class="submit">
                        
                        <input value="Login" type="submit">
                    </div>
                </form>

                <div class="register">
                    <p style="color: white;">belum punya akun?</p>
                    <a href="{{ route('layout.register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>