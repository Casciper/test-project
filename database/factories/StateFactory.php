<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<State>
 */
class StateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'likes' => $this->faker->numberBetween(1, 20),
            'views' => $this->faker->numberBetween(23, 200)
        ];
    }
}
