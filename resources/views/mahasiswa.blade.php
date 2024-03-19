<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


    <title>Data Mahasiswa</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Data Mahasiswa yang sudah terdaftar</h2>
                <p>Cari Data mahasiswa</p>
                <div class="form-group">

                </div>

                <form action="/mahasiswa/cari" method="get">
                    <input type="text" name="cari"placeholder="Cari Mahasiswa..." value="{{ old('cari') }}">
                    <input type="submit" value="cari">
                </form>

                <br>




                <table class="table table-bordered">
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


            </div>
        </div>
    </div>

</body>

</html>
