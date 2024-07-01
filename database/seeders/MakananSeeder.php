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
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi beras merah', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi jagung', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Nasi putih', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Roti putih', 'natrium' => 3, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan putih', 'natrium' => 2, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan hitam', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Kentang', 'natrium' => 2, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Tumis bandeng', 'natrium' => 1, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Sop konro', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Soto banjar', 'natrium' => 2, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ayam taliwang', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Gulai kambing', 'natrium' => 3, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Cumi-cumi goreng', 'natrium' => 1, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ikan mujahir pepes', 'natrium' => 1, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Tekwan', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Ayam goreng', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 17],
            ['jenis_makanan' => 'Masakan', 'nama_makanan' => 'Bebek daging goreng', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 17],
        ]);
    }
}
