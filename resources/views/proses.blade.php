<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proses</title>
</head>

<body>
    <div class="container">
        <div class="row justify-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3>Malas Ngoding</h3>
                    <h3 class="my-4">Data yang di input</h3>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="widht:150px">Nama</td>
                            <td> {{ $data->('nama') }} </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
