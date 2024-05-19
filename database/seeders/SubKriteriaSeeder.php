<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_kriterias')->insert([
            'nama_kriteria' => 'Natrium',
            'rentang_nilai' => '<200 mg',
            'nilai' => '3',
        ]);
    }
}
