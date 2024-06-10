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
                <form method="POST" action="{{ route('admin.update', ['siswa'=>$siswa->id]) }}">
                    @csrf
                    @method('PUT')
    
                    <div class="namadpn">
                        <label for="">ID : </label>
                        <div class="id">
                            <input readonly disabled type="text" name="id" value="{{ $siswa->id }}" >
                        </div>
                    </div>
    
                    <div class="namadpn">
                        <label for="">Nama : </label>
                        <div class="namadepan">
                            <input type="text" name="nama_depan" value="{{ $siswa->nama_depan }}">
                        </div>
                    </div>
                    <div class="namadpn">
                        <label for="">Password : </label>
                        <div class="pasport">
                            <input type="text" name="password" value="{{ $siswa->password }}">
                        </div>
                    </div>

                    <div class="logout">


                        <input type="submit" value="Update">
        
        
                    </div>
    
    
                </form>
            </div>


        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
