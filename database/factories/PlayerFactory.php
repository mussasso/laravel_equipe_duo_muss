<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $genre = ["homme",'Femme'];
        // return [
        //     'name' => $this->faker->name(),
        //     'lastname' => $this->faker->lastname(),
        //     'age' => $this->faker->randomNumber(1,9),
        //     'phone' => $this->faker->phoneNumber(),
        //     'email' => $this->faker->email(),
        //     'genre' => $genre[rand(1,count($genre)-1)],
        //     'pays' => $this->faker->country(),
        //     'role_id' => Role::inRandomOrder()->first()->id,
        //     'team_id' => Team::inRandomOrder()->first()->id,
        // ];
    }
}
