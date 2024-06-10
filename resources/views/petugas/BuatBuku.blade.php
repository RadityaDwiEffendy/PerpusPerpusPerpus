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
                <p>Buat Buku </p>
            </div>


            <div class="foro">
                <form action="{{ route('petugas.storess') }}" method="POST">
                    @csrf
                    <div class="namadpn">
                        <label for="">Author : </label>
                        <div class="id">
                            <input type="text"  name="author"><br>
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Judul : </label>
                        <div class="id">
                            <input type="text" id="judul" name="judul"><br>
                        </div>
                    </div>
    
                    <div class="namadpn">
                        <label for="">URL Gambar : </label>
                        <div class="namadepan">
                            <input type="text" id="gambar_url" name="gambar_url"><br>
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Deskripsi : </label>
                        <div class="pasport">
                            <textarea id="deskripsi" name="deskripsi"></textarea><br>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">URL Download : </label>
                        <div class="namadepan1">
                            <input type="text" id="url" name="url"><br>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">Paragraf 1 : </label>
                        <div class="namadepan1">
                            <textarea name="paragraf1" id="paragraf1"></textarea>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">Paragraf 2 : </label>
                        <div class="namadepan1">
                            <textarea name="paragraf2" id="paragraf2"></textarea>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">Paragraf 3 : </label>
                        <div class="namadepan1">
                            <textarea name="paragraf3" id="paragraf3"></textarea>
                        </div>
                    </div>
                    <div class="namadpn1">
                        <label for="">Paragraf 4 : </label>
                        <div class="namadepan1">
                            <textarea name="paragraf4" id="paragraf4"></textarea>
                        </div>
                    </div>
                    

                    <div class="logout">


                        <button type="submit">Submit</button>
        
        
                    </div>
    
    
                </form>
            </div>


        </div>
    </div>

    
</body>
</html>
