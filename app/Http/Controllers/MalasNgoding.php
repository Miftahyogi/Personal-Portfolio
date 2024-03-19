<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasNgoding extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $message = [
            'required' => 'ini perlu diisi cuy',
            'min' => 'maaf, nama anda kurang 1 huruf',
            'max' => 'maaf, nama anda terlalu panjang',
            'numeric' => 'harus berupa angka'
        ];
        $this->validate($request, [
            // dd($request->all())
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'umur' => 'required|numeric'
        ], $message);
        return view('proses', compact('request'));
    }
}
