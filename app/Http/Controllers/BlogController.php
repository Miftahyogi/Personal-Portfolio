<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function master()
    {
        return view('master');
    }
    public function blog()
    {
        return view('blog', [
            "name" => "miftah Riski Prayogi",
            "profesi" => "Web Developer"
        ]);
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function header()
    {
        return view('header');
    }
}
