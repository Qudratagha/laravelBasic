<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RollsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rollName' => $this->faker->jobTitle(),
            'rollDesc' => $this->faker->text(),
        ];
    }
}
