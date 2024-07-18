<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriterias')->insert([
            ['id' => '1','nama' => 'Natrium','bobot_kriteria' => '0.1','atribut' => 'Cost'],
            ['id' => '2','nama' => 'Kalium','bobot_kriteria' => '0.1','atribut' => 'Cost'],
            ['id' => '3','nama' => 'Protein','bobot_kriteria' => '0.3','atribut' => 'Benefit'],
            ['id' => '4','nama' => 'Indeks Glikemik','bobot_kriteria' => '0.2','atribut' => 'Cost'],
            ['id' => '5','nama' => 'Cara Pengolahan','bobot_kriteria' => '0.3','atribut' => 'Benefit'],
        ]);
    }
}
