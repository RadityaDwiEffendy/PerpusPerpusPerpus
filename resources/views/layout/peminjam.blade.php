<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/peminjamuser.css') }}">

</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a href="{{ route('layout.home') }}">Buku</a>
            <a href="{{ route('layout.favorit') }}">Favorit</a>
            <a href="">Dipinjam</a>

        </div>

    </div>
    <div class="isibuk">
        <div class="lebihisi">


            <div class="ss">
                <div class="containig">
                    <p>Pending</p>
                    <div class="pending">
                        <div class="pending1">
                            <div class="pending2">
                                {{-- buku --}}
                                @foreach ($peminjamans as $p)
                                <div class="bookcont">
                                    <div class="bukunya">
                                        <img src="{{ $p->book->image_url }}" alt="">
                                        <div class="judull">
                                            <h2>{{ $p->book->judul }}</h2>
                                        </div>
                                        <div class="desc">
                                            <p>Pengembalian : {{ $p->tanggal_pengembalian }}</p>
                                            <p>status : {{ $p->status }}</p>

                                        </div>
                
                
                                    </div>
                                    
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="containig">
                    <p>Berlangsung</p>
                    <div class="pending">
                        <div class="pending1">
                            <div class="pending2">
                                {{-- buku --}}
                                @foreach ($ongoingPeminjamans as $p)
                                <div class="bookcont">
                                    <div class="bukunya">
                                        <img src="{{ $p->book->image_url }}" alt="">
                                        <div class="judull">
                                            <h2>{{ $p->book->judul }}</h2>
                                        </div>
                                        <div class="desc">
                                            <p>Pengembalian : {{ $p->tanggal_pengembalian }}</p>
                                            <p>status : {{ $p->status }}</p>
                                            <p>Denda : {{ number_format($p->denda,0, ',','.') }}</p>
                                        </div>
                
                
                                    </div>
                                    
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="containig">
                    <p>Selesai</p>
                    <div class="pending">
                        <div class="pending1">
                            <div class="pending2">
                                {{-- buku --}}
                                @foreach ($donePeminjaman as $p)
                                <div class="bookcont">

                                    <div class="bukunya">
                                        <div class="ulas">
                                            <button>
                                                <a href="/layout/peminjam/{{ $p->book_id }}/ulas">Ulas</a>
                                            </button>
                                        </div>
                                        <img src="{{ $p->book->image_url }}" alt="">
                                        <div class="judull">
                                            <h2>{{ $p->book->judul }}</h2>
                                        </div>
                                        <div class="desc">
                                            <p>Pengembalian : {{ $p->tanggal_pengembalian }}</p>
                                            <p>status : {{ $p->status }}</p>
                                            <p>Denda : {{ number_format($p->denda,0, ',','.') }}</p>
                                        </div>
                
                
                                    </div>
                                    
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="tutupan">

                </div>
                
                
            </div>


        </div>
    </div>


</body>

</html>
