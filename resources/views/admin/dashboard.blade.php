<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">



</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a style="color: rgb(226, 226, 226)" href="">Dashboard</a>
            <a href="{{ route('admin.e-book') }}">E-Book</a>
            <a href="{{ route('admin.akun') }}">Akun</a>
            <a href="">Sedang Diminta</a>
        </div>

        <button onclick="adminprof()" class="profile">
            <div class="gambar">

            </div>


            <ul>
                <p>Admin</p>
            </ul>
        </button>



    </div>


    <div class="container">


        <div class="isibuk">
            <div class="lebihisi">
                <div class="dashboard">

                    <div class="dlmm">
                        <div class="kotak">
                            <div class="isii">
                                <p>TOTAL AKUN</p>
                                <div class="ttl">
                                    <h1>{{ $totalAccounts }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="kotak">
                            <div class="isii">
                                <p>TOTAL BUKU</p>
                                <div class="ttl">
                                    <h1>{{  $bookCount }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="kotak">
                            <div class="isii">
                                <p>Total buku</p>
                                <div class="tt">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="kotak">
                            <div class="isii">
                                <p>Total buku</p>
                                <div class="ttl">
                                    3
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
