<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserRollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'roll_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
