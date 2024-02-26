<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absen</title>
</head>

<body>
    <h2>Absen Mahasiswa</h2>
    <br><br>

    <table border="1">
        <tr>
            <td>Id :</td>
            <td>Nama :</td>
            <td>Semester :</td>
            <td>Jurusan :</td>
            <td>Alamat :</td>
            <td>Keterangan :</td>
        </tr>
        @foreach ($mahasiswa as $m)
            <<tr>
                <td> {{ $m->mahasiswa_id }} </td>
                <td> {{ $m->mahasiswa_nama }} </td>
                <td> {{ $m->mahasiswa_semester }} </td>
                <td> {{ $m->mahasiswa_jurusan }} </td>
                <td> {{ $m->mahasiswa_alamat }} </td>
                <td>
                    <a href="/mahasiswa/editmahasiswa/{{ $m->mahasiswa_id }}">Edit</a>
                    |
                    <a href="/mahasiswa/hapusmahasiswa/{{ $m->mahasiswa_id }}">Hapus</a>
                </td>
                </tr>
        @endforeach
    </table>

    <br>
    <a href="/tambahmahasiswa">Tambah data mahasiswa</a>
</body>

</html>
