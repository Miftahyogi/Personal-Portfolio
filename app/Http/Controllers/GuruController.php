<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru', ['guru' => $guru]);
    }

    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }

    public function trash()
    {
        $guru = Guru::onlyTrashed()->get();
        // dd($guru);
        // exit();
        return view('guru_trash', ['guru' => $guru]);
    }

    public function restore($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id)->first();
        $guru->restore();
        return redirect('/guru/trash');
    }

    public function restoreAll()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru')->with('success', 'Data Anda berhasil kembali');
    }

    public function forceDelete()
    {
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru')->with('success', 'Data Anda berhasil dihapus permanen');
    }
}
