<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="prof-anda">
                <p>Edit </p>
            </div>


            <div class="foro">
                <form method="POST" action="{{ route('admin.perbaruiBuku', ['book'=>$book->id]) }}">
                    @csrf
                    @method('PUT')
    
                    <div class="namadpn">
                        <label for="">Author : </label>
                        <div class="id">
                            <input type="text" name="id" value="{{ $book->author }}">
                        </div>
                    </div>
    
                    <div class="namadpn">
                        <label for="">Judul : </label>
                        <div class="namadepan">
                            <input type="text" name="nama_depan" value="{{ $book->Judul }}">
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Url gambar : </label>
                        <div class="pasport">
                            <input type="text" name="password" value="{{ $book->gambar_url }}">
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Deskripsi : </label>
                        <div class="pasport">
                            <input type="text" name="password" value="{{ $book->deskripsi }}">
                        </div>
                    </div>

                    
    
    
                </form>
            </div>


        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
