<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KriteriaSeeder::class);
        $this->call(MakananSeeder::class);
        $this->call(SubKriteriaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
