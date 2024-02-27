<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>

<body>

    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <h2>Data Mahasiswa yang sudah terdaftar</h2>

    <table border="1">
        <tr>
            <th>Nama Mahasiswa :</th>
            <th>Semester :</th>
            <th>Jurusan :</th>
            <th>Alamat :</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td> {{ $mhs->mahasiswa_nama }} </td>
                <td> {{ $mhs->mahasiswa_semester }} </td>
                <td> {{ $mhs->mahasiswa_jurusan }} </td>
                <td> {{ $mhs->mahasiswa_alamat }} </td>
            </tr>
        @endforeach
    </table>


    <br>
    Halaman : {{ $mahasiswa->currentpage() }} <br>
    Jumlah Data : {{ $mahasiswa->total() }} <br>
    Data Perhalaman : {{ $mahasiswa->perPage() }} <br>


    {{ $mahasiswa->links() }}


</body>

</html>
