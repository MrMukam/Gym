<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class subscription_plansFactory extends Factory
{

    public function definition(): array
    {

        return [
            'category_id' => Category::factory(),
            'frequency' => $this->faker->randomElement(['hr', 'mn', 'yr']),
            'attendance' => $this->faker->randomElement([[1, 3, 5], [2, 4, 6]]),
        ];
    }
}
