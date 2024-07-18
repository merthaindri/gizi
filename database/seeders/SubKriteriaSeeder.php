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
            ['nama_kriteria' => 'Natrium', 'rentang_nilai' => '<200 mg', 'nilai' => '1'],
            ['nama_kriteria' => 'Natrium', 'rentang_nilai' => '200 - 400 mg', 'nilai' => '2'],
            ['nama_kriteria' => 'Natrium', 'rentang_nilai' => '>400 mg', 'nilai' => '3'],
            ['nama_kriteria' => 'Kalium', 'rentang_nilai' => '<100 mg', 'nilai' => '1'],
            ['nama_kriteria' => 'Kalium', 'rentang_nilai' => '100 - 200 mg', 'nilai' => '2'],
            ['nama_kriteria' => 'Kalium', 'rentang_nilai' => '>200 mg', 'nilai' => '3'],
            ['nama_kriteria' => 'Protein', 'rentang_nilai' => 'Protein hewani', 'nilai' => '3'],
            ['nama_kriteria' => 'Protein', 'rentang_nilai' => 'Protein nabati', 'nilai' => '2'],
            ['nama_kriteria' => 'Protein', 'rentang_nilai' => 'Bukan sumber protein', 'nilai' => '1'],
            ['nama_kriteria' => 'Indeks Glikemik', 'rentang_nilai' => '<55 mg', 'nilai' => '1'],
            ['nama_kriteria' => 'Indeks Glikemik', 'rentang_nilai' => '55 - 70 mg', 'nilai' => '2'],
            ['nama_kriteria' => 'Indeks Glikemik', 'rentang_nilai' => '>70 mg', 'nilai' => '3'],
            ['nama_kriteria' => 'Cara Pengolahan', 'rentang_nilai' => 'Dikukus', 'nilai' => '5'],
            ['nama_kriteria' => 'Cara Pengolahan', 'rentang_nilai' => 'Direbus', 'nilai' => '4'],
            ['nama_kriteria' => 'Cara Pengolahan', 'rentang_nilai' => 'Ditumis', 'nilai' => '3'],
            ['nama_kriteria' => 'Cara Pengolahan', 'rentang_nilai' => 'Dibakar', 'nilai' => '2'],
            ['nama_kriteria' => 'Cara Pengolahan', 'rentang_nilai' => 'Digoreng', 'nilai' => '1'],   
        ]);
    }
}
