

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    @include('layout.navbar')

    <h1>Profile</h1>
    <p>Nama Depan: {{ $user->nama_depan }}</p>
    <p>Nama Belakang: {{ $user->nama_belakang }}</p>
    
</body>
</html>
