<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Tutorial Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Guru
            </div>
        </div>
        <div class="card-body">

            <a href="/guru">Data Guru</a>
            |
            <a href="/guru/trash" class="btn btn-primary">Tong Sampah</a>

            <br><br>
            <a href="/guru/restoreall">Kembalikan Semua</a>
            |
            <a href="/guru/forcedelete">Hapus Permanen Semua</a>
            <br />
            <br />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th width="30%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                        <tr>
                            <td> {{ $g->nama }} </td>
                            <td> {{ $g->umur }} </td>
                            <td>
                                <a href="/guru/kembalikan/{{ $g->id }}"
                                    class="btn btn-success btn-sm">Restore</a>
                                <a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus
                                    Permanen</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
