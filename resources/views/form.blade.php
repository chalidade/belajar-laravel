<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/form/prosess" method="post">
        @csrf
        <p>Nama : <input type="text" name="nama" placeholder="Nama Lengkap" /></p>
        <p>Kelas : <input type="text" name="kelas" placeholder="Kelas" /></p>
        <p>Alamat : <input type="text" name="alamat" placeholder="Alamat" /></p>
        <p><input type="submit" value="Simpan" /></p>
    </form>
</body>
</html>