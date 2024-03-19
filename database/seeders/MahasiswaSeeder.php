<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $faker = Faker::Create('id_ID'); //Indonesia

        for ($i = 0; $i <= 60; $i++) {
            DB::table('absen_mahasiswa')->insert([
                'mahasiswa_nama' => $faker->name,
                'mahasiswa_semester' => $faker->numberBetween(4, 8),
                'mahasiswa_jurusan' => $faker->jobTitle,
                'mahasiswa_alamat' => $faker->address
            ]);
        }
    }
}
