<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>

<body>
    <h2>Edit Data Mahasiswa</h2>

    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->mahasiswa_id }}"> <br>
            Nama: <input type="text" required="required" name="nama" value="{{ $m->mahasiswa_nama }}"> <br>
            Semester: <input type="text" required="required" name="semester" value="{{ $m->mahasiswa_semester }}">
            <br>
            Jurusan: <input type="text" required="required" name="jurusan" value="{{ $m->mahasiswa_jurusan }}"><br>
            Alamat:
            <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
