<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
</head>

<body>

    <div class="container">
        <div class="row justify-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="text-center">Malasngoding.com</h3><br>

                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <br>
                    {{-- form validasi --}}

                    <form action="/proses" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input class="form-control" type="text" name="nama" value=" {{ old('nama') }} ">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaa">Pekerjaan : </label>
                            <input class="form-control" type="text" name="pekerjaan"value=" {{ old('pekerjaan') }} ">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur :</label>
                            <input class="form-control" type="text" name="umur" value=" {{ old('umur') }} ">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="proses">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
