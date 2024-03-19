<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tutorial Laravel Soft Deletes</title>
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data guru | <a href="www.google.com">malas ngoding.com</a>
            </div>
            <div class="card-body">
                <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>
                |
                <a href="/guru/trash">Tong Sampah</a>
                <br><br>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th width="1%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $g)
                            <tr>
                                <td> {{ $g->nama }} </td>
                                <td> {{ $g->umur }} </td>
                                <td><a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            alert(' {{ session('success') }}')
        </script>
    @endif


</body>

</html>
