<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'Nim' => '2141720100',
            'Nama' => 'Bima Putra Wicaksono',
            'Jurusan' => 'D-IV Teknik Informatika',
            'No_Handphone' => '081230377917',
            'Email' => 'bima@gmail.com',
        ]);
    }
}
