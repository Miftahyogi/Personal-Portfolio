<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MalasNgoding;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Pegawai
// Route::get('/datapegawai', [PegawaiController::class, 'datapegawai'])->name('datapegawai');



//route blog
Route::get('/master', [BlogController::class, 'master'])->name('master');

Route::get('/blog', function () {
    return view('blog', [
        "name" => "nurhadi aldo",
        "profesi" => "capres idolamu"
    ]);
});



Route::get('/master', [BlogController::class, 'master'])->name('master');
Route::get('/blog', [BlogController::class, 'blog'])->name('home');
Route::get('/tentang', [BlogController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [BlogController::class, 'kontak'])->name('kontak');
Route::get('/header', [BlogController::class, 'header'])->name('header');

//route pegawai
Route::get('/pegawai', [PegawaiController::class, 'pegawai'])->name('pegawai');
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('tambah');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('store');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('hapus');

//Route Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari'])->name('cari');
Route::get('/datamahasiswa', [MahasiswaController::class, 'datamahasiswa'])->name('data mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambah_mahasiswa'])->name('tambahMahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('editdatamahasiswa');
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update_mahasiswa'])->name('update');

// Route validasi data
Route::get('/input', [MalasNgoding::class, 'input'])->name('input');
Route::post('/proses', [MalasNgoding::class, 'proses'])->name('proses');

// Route Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus'])->name('hapus');
Route::get('/guru/trash', [GuruController::class, 'trash'])->name('guru_trash');
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'restore'])->name('restore');
Route::get('/guru/restoreall', [GuruController::class, 'restoreAll'])->name('kembalikan_semua');
Route::get('/guru/forcedelete', [GuruController::class, 'forceDelete'])->name('hapus_permanen_semua');
