<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

 
class TestSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal A',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal B',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
        ]);
    }
}