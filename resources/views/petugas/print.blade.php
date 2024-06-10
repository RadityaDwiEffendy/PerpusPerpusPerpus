<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/print.css') }}">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="tulisan">
                <h1>Print Peminjaman</h1>
            </div>
    
            <div class="isi">
                <div class="containig">
                    <h1>Pending</h1>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nama</th>
                                <th>Judul</th>
                                <th>Tgl Peminjaman</th>
                                <th>Tgl Pengembalian</th>
                                <th>Status</th>
                                <th>Denda</th>

        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjamans as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->user->nama_depan }}</td>
                                    <td>{{ $p->book->judul }}</td>
                                    <td>{{ $p->tanggal_peminjaman }}</td>
                                    <td>{{ $p->tanggal_pengembalian }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ $p->denda }}</td>
                                    
                                </tr>
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
                <div class="containig">
                    <h1>Berlangsung</h1>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nama</th>
                                <th>Judul</th>
                                <th>Tgl Peminjaman</th>
                                <th>Tgl Pengembalian</th>
                                <th>Status</th>
                                <th>Denda</th>

        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ongoingPeminjamans as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->user->nama_depan }}</td>
                                    <td>{{ $p->book->judul }}</td>
                                    <td>{{ $p->tanggal_peminjaman }}</td>
                                    <td>{{ $p->tanggal_pengembalian }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ $p->denda }}</td>
                                    
                                </tr>
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        
                <div class="containig">
                    <h1>Berakhir</h1>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nama</th>
                                <th>Judul</th>
                                <th>Tgl Peminjaman</th>
                                <th>Tgl Pengembalian</th>
                                <th>Status</th>
                                <th>Denda</th>

        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donePeminjaman as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->user->nama_depan }}</td>
                                    <td>{{ $p->book->judul }}</td>
                                    <td>{{ $p->tanggal_peminjaman }}</td>
                                    <td>{{ $p->tanggal_pengembalian }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ $p->denda }}</td>
                                  
                                </tr>
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            setTimeout(function() {
                window.print()
            }, 1000);
        }
    </script>
</body>
</html>