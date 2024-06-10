<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/editDenda.css') }}">
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

                    {{-- <div class="namadpn">
                        <label for="">Tanggal pengembalian : </label>
                        <div class="namadepan">
                            <input name="tanggal_pengembalian" type="date" value="{{  $book->tanggal_pengembalian }}" readonly>
                        </div>
                    </div> --}}
                    <div class="namadpn">

                        <div class="namadepan">
                            <label for="denda" >Denda : </label>
                            <select name="denda" id="denda">
                                <option value="0"{{ $book->denda == 0? 'selected' : '' }} >Lunas</option>
                                
                                <option value="15000"{{ $book->denda == 15000? 'selected' : '' }} >15000 / Rusak</option>
                                <option value="35000"{{ $book->denda == 30000? 'selected' : '' }}>35000 / Hilang</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="namadpn">

                        <div class="namadepan">
                            <label for="status" >Status : </label>
                            <select name="status" id="status">
                                <option value="dipinjam"{{ $book->status == 'dipinjam'? 'selected' : '' }}>dipinjam</option>
                                <option value="dikembalikan"{{ $book->status == 'dikembalikan'? 'selected' : '' }}>dikembalikan</option>
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


