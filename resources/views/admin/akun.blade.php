<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/akun.css') }}">


</head>

<body>

    <div class="navbar">
        <div class="nav-link">
            <a href="">Buku</a>
            <a href="{{ route('admin.e-book') }}">E-Book</a>
            <a style="color: gray" href="{{ route('admin.akun') }}">akun</a>
            <a href="">Sedang Diminta</a>
        </div>

        <button class="profile">
            <div class="gambar">

            </div>


            <ul>
                <li>Admin</li>
            </ul>
        </button>



    </div>

    <div class="container">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Created at</th>
                    <th>updated at</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody class="siswa-body">
                @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_depan }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
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

</body>

</html>
