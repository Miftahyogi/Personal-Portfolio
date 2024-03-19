<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Edit Data Pegawai</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
            </div>
            <br><br>
            <form action="/pegawai/update/{{ $pegawai->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"
                        placeholder="Nama pegawai ..." value=" {{ $pegawai->nama }} ">

                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea type="text" name="alamat"class="form-control" placeholder="Alamat pegawai..."
                        value=" {{ $pegawai->alamat }}cols="50" rows="5"></textarea>

                    @if ($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
