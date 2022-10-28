<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                "name" => "cristiano",
                "lastname" => "ronaldo",
                "age" => 34,
                "phone" => 0475452017,
                "email" => "ronaldo@ronaldo.com",
                "genre" => "homme",
                "role_id" => 3,
                "team_id" => 3,
                "photo_id" => 4
            ],
            [
                "name" => "mussasso",
                "lastname" => "di brassil",
                "age" => 26,
                "phone" => 0475452022,
                "email" => "muss@dibrasil.com",
                "genre" => "homme",
                "role_id" => 2,
                "team_id" => 2,
                "photo_id" => 3,
            ],
            [
                "name" => "messi",
                "lastname" => "la putana",
                "age" => 42,
                "phone" => 040000000,
                "email" => "messi@laputana.com",
                "genre" => "homme",
                "role_id" => 2,
                "team_id" => 1,
                "photo_id" => 2,
            ],
            [
                "name" => "debruyn",
                "lastname" => "kevin",
                "age" => 12,
                "phone" => 0475452021,
                "email" => "kevin@debruyn.com",
                "genre" => "homme",
                "role_id" => 1,
                "team_id" => 1,
                "photo_id" =>1,
            ]
        ]);
    }
}
