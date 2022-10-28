<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                "image" => "296734.HR.jpg"
            ],
            [
                "image" => "I0000GTOgW3USyNU.jpg"
            ],
            [
                "image" => "221022075122-01-paris-saint-germain-ajaccio-1021.jpg"
            ],
            [
                "image" => "unnamed.jpg"
            ],
            [
                "image" => "7m4OtFNo2tkekxXLXvQ8RLLEpraJNJyBRL8ka4lI.jpg"
            ]
            ]);}
}
