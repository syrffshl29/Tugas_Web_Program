<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Pekerjaan Pertanian',
            'skor' => '8',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Pengemudi Kend. Militer',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
    }
}
