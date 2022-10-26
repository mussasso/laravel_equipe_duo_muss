<?php

namespace Database\Factories;

use App\Models\Continent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $role = ["Attack","Defence","Middle","Substitute"];
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'land' => $this->faker->country(),
            'maxplayers' => $this->faker->numberBetween(1,9),
            // 'role' => $role[rand(1,count($role)-1)],
            'continent_id' => Continent::inRandomOrder()->first()->id
        ];
    }
}
