<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body>
    <h1>Create Book</h1>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul"><br>

        <label for="gambar_url">URL Gambar:</label><br>
        <input type="text" id="gambar_url" name="gambar_url"><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
