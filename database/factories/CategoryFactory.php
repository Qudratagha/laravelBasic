<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoryName' => $this->faker->name(),
            'dateCreated' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
