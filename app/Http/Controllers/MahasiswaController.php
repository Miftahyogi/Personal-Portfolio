<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = DB::table('absen_mahasiswa')->get();
        // dd($mahasiswa);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
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
        return redirect('/mahasiswa');
    }
}
