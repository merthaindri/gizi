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
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Roti putih', 'natrium' => 3, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan putih', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ketan hitam', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Kentang', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Karbohidrat', 'nama_makanan' => 'Ubi Cilembu', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Tumis bandeng', 'natrium' => 2, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Sop konro', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Soto banjar', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Ayam taliwang', 'natrium' => 3, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 16],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Gulai kambing', 'natrium' => 2, 'kalium' => 5, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Cumi-cumi goreng', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 17],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Ikan mujahir pepes', 'natrium' => 1, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Tekwan', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Ayam goreng', 'natrium' => 1, 'kalium' => 6, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 17],
            ['jenis_makanan' => 'Masakan Protein Hewani', 'nama_makanan' => 'Bebek daging goreng', 'natrium' => 1, 'kalium' => 4, 'protein' => 7, 'indeks_glikemik' => 10, 'cara_pengolahan' => 17],

            ['jenis_makanan' => 'Masakan Protein Nabati', 'nama_makanan' => 'Tahu goreng', 'natrium' => 1, 'kalium' => 4, 'protein' => 8, 'indeks_glikemik' => 12, 'cara_pengolahan' => 17],
            ['jenis_makanan' => 'Masakan Protein Nabati', 'nama_makanan' => 'Tumis tempe', 'natrium' => 2, 'kalium' => 6, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 15],
            ['jenis_makanan' => 'Masakan Protein Nabati', 'nama_makanan' => 'Pepes tahu', 'natrium' => 1, 'kalium' => 5, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 13],
            ['jenis_makanan' => 'Masakan Protein Nabati', 'nama_makanan' => 'Tahu takwa rebus', 'natrium' => 1, 'kalium' => 4, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Masakan Protein Nabati', 'nama_makanan' => 'Tempe goreng', 'natrium' => 1, 'kalium' => 6, 'protein' => 8, 'indeks_glikemik' => 11, 'cara_pengolahan' => 17],

            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Bayam rebus', 'natrium' => 1, 'kalium' => 6, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Buncis rebus', 'natrium' => 1, 'kalium' => 5, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Wortel rebus', 'natrium' => 1, 'kalium' => 5, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Sayur bunga pepaya', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Pelecing kangkung', 'natrium' => 3, 'kalium' => 6, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Daun singkong rebus', 'natrium' => 1, 'kalium' => 4, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Daun kelor rebus', 'natrium' => 1, 'kalium' => 5, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Daun katuk rebus', 'natrium' => 1, 'kalium' => 4, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Kacang panjang rebus', 'natrium' => 1, 'kalium' => 5, 'protein' => 8, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],
            ['jenis_makanan' => 'Sayur', 'nama_makanan' => 'Daun talas rebus', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => 14],

            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Alpukat', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Buah naga merah', 'natrium' => 1, 'kalium' => 5, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Buah naga putih', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Manggis', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Pisang ambon', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Melon', 'natrium' => 1, 'kalium' => 5, 'protein' => 9, 'indeks_glikemik' => 11, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Sirsak', 'natrium' => 1, 'kalium' => 6, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Semangka', 'natrium' => 1, 'kalium' => 4, 'protein' => 9, 'indeks_glikemik' => 12, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Mangga', 'natrium' => 1, 'kalium' => 5, 'protein' => 9, 'indeks_glikemik' => 11, 'cara_pengolahan' => null],
            ['jenis_makanan' => 'Buah', 'nama_makanan' => 'Belimbing', 'natrium' => 1, 'kalium' => 5, 'protein' => 9, 'indeks_glikemik' => 10, 'cara_pengolahan' => null],
            
        ]);
    }
}
