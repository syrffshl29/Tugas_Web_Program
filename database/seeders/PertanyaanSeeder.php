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
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Akuntan',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Ilmuwan',
            'skor' => '2',
            'test_id' => '2',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Penjual Hasil Mode',
            'skor' => '2',
            'test_id' => '2',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'seniwati',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'wartawati',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Pianis Konser',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Guru SD',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Sekretaris Pribadi',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Modiste',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
        DB::table('pertanyaan')->insert([
            'pertanyaan' => 'Dokter',
            'skor' => '2',
            'test_id' => '1',
            'tipe_soal_id' => '1',
        ]);
    }
}
