<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Guru; // Pastikan untuk mengimpor model yang sesuai
use Carbon\Carbon;



class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $tanggal_lahir = $faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d');

            // Hitung umur berdasarkan tanggal lahir
            $tanggal_lahir = new Carbon($tanggal_lahir);
            $umur = $tanggal_lahir->age;
            Guru::create([
                'nama' => $faker->name,
                'umur' => $umur,
            ]);
        }
    }
}
