<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('absen_mahasiswa')->insert([
            'mahasiswa_nama' => 'Nanda',
            'mahasiswa_semester' => 8,
            'mahasiswa_jurusan' => 'Teknik Informatika',
            'mahasiswa_alamat' => 'singosari, Malang'
        ]);
    }
}
