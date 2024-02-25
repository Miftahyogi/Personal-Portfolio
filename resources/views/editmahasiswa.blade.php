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
    <form action="/mahasiswa/update" method="post"></form>
    @csrf
    @foreach($mahasiswa as $m) @endforeach
    input:<input type="hidden" name="id"> {{ $m->mahasiswa_id }} <br>
    Name <input type="text" required="required" name="nama" id="">

</body>

</html>
