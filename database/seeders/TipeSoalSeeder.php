<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class TipeSoalSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_soal')->insert([
            'nama_tipe' => 'Soal RMIB',
            'deskripsi' => 'Mengerjakan soal dengan memilih 3 pilihan',
        ]);
    }
}