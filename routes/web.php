<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
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
Route::post('/pegawai/update', [PegawaiController::class, 'update'])->name('update');
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'])->name('hapus');

//Route Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('index');
Route::get('/datamahasiswa', [MahasiswaController::class, 'datamahasiswa'])->name('datamahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambah_mahasiswa'])->name('tambahMahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('editdatamahasiswa');
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update_mahasiswa'])->name('update');
