<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/editPeminjaman.css') }}">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Konfirmasi </p>
            </div>
    
            <div class="foro">
                {{-- @if(!$errors->isEmpty())
                    {{ $errors }}
                @endif --}}
                <form method="POST" action="">


                    
                    

                    @csrf
    
                    {{-- <div class="namadpn">
                        <label for="">ID Pengguna : </label>
                        <div class="id">
                            <input type="text" name="siswa_id" value="{{ auth()->id() }}" readonly>
                        </div>
                    </div> --}}
    
                    <div class="namadpn">
                        <label for="">Judul Buku : </label>
                        <div class="namadepan">
                            <input type="text" name="book_id" value="{{ $book->id }}" readonly>
                        </div>
                    </div>

    
                    <div class="namadpn">
                        <label for="">Tanggal Pengambilan : </label>
                        <div class="namadepan">
                            <input name="tanggal_peminjaman" type="date" value="{{ now()->toDateString() }}" readonly>
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Tanggal pengembalian : </label>
                        <div class="namadepan">
                            <input name="tanggal_pengembalian" type="date" value="{{  now()->addDays(7)->toDateString() }}" readonly>
                        </div>
                    </div>
    
                    <div class="namadpn">

                        <div class="namadepan">
                            <label for="status" >Status : </label>
                            <select name="status" id="status">
                                <option value="pending">pending</option>
                                <option value="dipinjam">dipinjam</option>
                                <option value="dikembalikan">dikembalikan</option>
                            </select>
                        </div>
                    </div>


    
                    <div class="logout">
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>


