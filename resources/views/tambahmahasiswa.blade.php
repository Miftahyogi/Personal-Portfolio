<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah mahasiswa</title>
</head>

<body>
    <h2>Tambah Mahasiswa</h2>

    <a href="/mahasiswa">Kembali ke Data Mahasiswa</a>

    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id"> <br>
        Nama : <input type="text" name="nama" required="required" id=""> <br>
        Semester : <input type="text" name="semester" required="required" id=""><br>
        Jurusan : <input type="text" name="jurusan" required="required" id=""><br>
        Alamat :
        <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
