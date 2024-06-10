<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">



</head>

<body>

    @extends('admin.adminNavbar')
    @section('kontent')
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
                                <p>BELUM DI KONFIRMASI</p>
                                <div class="ttl">
                                    <h1>{{ $totalPeminjam }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="kotak">
                            <div class="isii">
                                <p>PINJAMAN SELESAI</p>
                                <div class="ttl">
                                    <h1>{{ $totalDone }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="container">
                    <div class="cret">
                        <Button onclick="BuatAKun()">
                            <p>Buat akun</p>
                        </Button>
                    </div>

        

                    <div class="containig">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Password</th>
                                    <th>Created at</th>
                                    <th>updated at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
            
                            
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_depan }}</td>
                                        <td>{{ $item->password }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td class="bbb">
                                            <div class="bta">
                                                <a href="{{ route('admin.edit',['siswa'=> $item->id]) }}">edit</a>
                                            </div>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.destroy', ['siswa' => $item->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete">
                                            </form>
                                        </td>
                
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
            
                </div>

                
            </div>
        </div>
    </div>
    @endsection


    


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
