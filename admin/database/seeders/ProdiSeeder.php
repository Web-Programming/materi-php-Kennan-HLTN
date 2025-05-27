<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Prodi::create([
        'nama' => "sistem informasi",
        'kode_prodi' => "SI",
       ]);
       Prodi::create([
        'nama' => "Informatika",
        'kode_prodi' => "IF",
       ]);
       Prodi::create([
        'nama' => "Management",
        'kode_prodi' => "MG",
       ]);
    }
}
