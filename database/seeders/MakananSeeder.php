<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makanans')->insert([
            ['id' => '2', 'nama_makanan' => 'Nasi Jagung'],  
            ['id' => '3', 'nama_makanan' => 'Nasi Putih'],
            ['id' => '4', 'nama_makanan' => 'Roti Putih'],
            ['id' => '5', 'nama_makanan' => 'Ketan Putih'],
            ['id' => '6', 'nama_makanan' => 'Ketan Hitam'],
            ['id' => '7', 'nama_makanan' => 'Kentang'],
        ]);
    }
}
