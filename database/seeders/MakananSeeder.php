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
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi beras merah'],  
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi jagung'],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi putih'],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Roti putih'],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan putih'],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan hitam'],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Kentang'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Tumis bandeng'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Sop konro'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Soto banjar'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ayam taliwang'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Gulai kambing'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Cumi-cumi goreng'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ikan mujahir pepes'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Tekwan'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ayam goreng'],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Bebek daging goreng'],
        ]);
    }
}
