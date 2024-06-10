<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>

    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Edit Buku </p>
            </div>


            <div class="foro">
                <form action="{{ route('petugas.updates',['book' => $book->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="namadpn">
                        <label for="">Author : </label>
                        <div class="id">
                            <input type="text"  name="author" value="{{ $book->author }}"><br>
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Judul : </label>
                        <div class="id">
                            <input type="text" id="judul" name="judul" value="{{ $book->judul }}"><br>
                        </div>
                    </div>
    
                    <div class="namadpn">
                        <label for="">URL Gambar : </label>
                        <div class="namadepan">
                            <input type="text" id="gambar_url" name="gambar_url" value="{{ $book->image_url }}"><br>
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Deskripsi : </label>
                        <div class="pasport">
                            <textarea id="deskripsi" name="deskripsi">{{ $book->deskripsi }}</textarea><br>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">URL Download : </label>
                        <div class="namadepan1">
                            <input type="text" id="url" name="url" value="{{ $book->url }}"><br>
                        </div>
                    </div>
                    
                    

                    <div class="logout">


                        <button type="submit">Update</button>
        
        
                    </div>
    
    
                </form>
            </div>


        </div>
    </div>

    
</body>
</html>
