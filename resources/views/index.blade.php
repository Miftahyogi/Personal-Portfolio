<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beljar Laravel</title>
</head>

<body>
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />

    <table border="1">

        <tr>
            <th>ID : </th>
            <th>Nama : </th>
            <th>Jabatan : </th>
            <th>Umur : </th>
            <th>Alamat : </th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_id }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="./pegawai/hapus">Hapus</a>
                    <a href="./pegawai/edit">Edit</a>
                    <td />
        @endforeach
        </tr>


    </table>



</body>

</html>
