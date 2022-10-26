<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                "continent" => "Europe",
            ],
            [
                "continent" => "Amerique du nord",
            ],
            [
                "continent" => "Afrique",
            ],
            [
                "continent" => "Asie",
            ],
            [
                "continent" => "Océanie",
            ],
        ]);
    }
}
