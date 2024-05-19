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
            'id' => '1',
            'nama' => 'Natrium',
            'bobot_kriteria' => '0,1',
            'atribut' => 'Benefit',
        ]);
    }
}
