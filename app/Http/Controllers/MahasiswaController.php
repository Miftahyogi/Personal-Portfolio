<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // method menampilkan halaman mahasiswa
    public function mahasiswa()
    {
        $mahasiswa = DB::table(('absen_mahasiswa'))->paginate(10);
        return view('mahasiswa', compact('mahasiswa'));
    }

    // method pencarian  data mahasiswa berdasarkan nama atau nim
    public function cariDataMahasiswa(Request $request)
    {
        //menangkap data pencarian
        $cari = $request->cariDataMahasiswa;

        //mengambil data dari table absen mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('absen_mahasiswa')
            ->where('mahasiswa_nama', 'like', '%' . $cari . '%')
            ->orWhere('mahasiswa_id', 'like', '%' . $cari . '%')
            ->paginate();
        return view('mahasiswa',  compact('mahasiswa'));
    }

    // method untuk menampilkan data mahasiswa
    public function datamahasiswa()
    {
        $mahasiswa = DB::table('absen_mahasiswa')->get();
        // dd($mahasiswa);
        return view('datamahasiswa', ['mahasiswa' => $mahasiswa]);
    }


    public function tambah_mahasiswa()
    {
        return view('tambahmahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('absen_mahasiswa')->where('mahasiswa_id', $id)->get();
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }


    public function update_mahasiswa(Request $request)
    {
        DB::table('absen_mahasiswa')->where('mahasiswa_id', $request->id)->update([
            'mahasiswa_nama' => $request->nama,
            'mahasiswa_semester' => $request->semester,
            'mahasiswa_jurusan' => $request->jurusan,
            'mahasiswa_alamat' => $request->alamat
        ]);
        return redirect('/datamahasiswa');
    }
}
