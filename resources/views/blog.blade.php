<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <h3> <?= $name ?> </h3>
    <h3> <?= $profesi ?> </h3>
    <p>Ini halaman Blog</p>
    <p>Selamat datang di Blog saya</p>

@endsection
