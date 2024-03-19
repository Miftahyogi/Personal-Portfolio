<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;

class PegawaiController extends Controller
{
    public function pegawai()
    {

        // mengambil data dari table pegawai dengan Laravel Query Builder
        // $pegawai = DB::table('pegawai')->get();

        // Mengambil data dari table pegawai dengan Eloquent
        $pegawai = Pegawai::all();

        // mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request): RedirectResponse
    {

        //   Melakukan validasi data dengan Laravel Query Builder
        // DB::table('pegawai')->insert([
        //     //insert data ke table pegawai
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat
        // ]);

        // Melakukan validasi data dengan Eloqeunt Query Builder

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);


        return redirect('/pegawai');
    }
    //buat method untuk melanjutkan dari route edit pada web.php
    public function edit($id)
    {
        //  mengambil data pegawai berdasarkan id yang dikirim oleh parameter menggunakan query builder
        // $pegawai = DB::table('pegawai')->where('id', $id)->get();

        // mengambil data pegwai menggunakan eloquent ORM
        $pegawai = Pegawai::find($id);


        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        // update data pegawai dengan query builder
        // DB::table('pegawai')->where('id', $request->id)->update([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat
        // ]);

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        // melakukan tindakan
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();


        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih dengan query builder
        // DB::table('pegawai')->where('id', $id)->delete();
        $pegawai = Pegawai::find($id);
        $pegawai->delete();



        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
