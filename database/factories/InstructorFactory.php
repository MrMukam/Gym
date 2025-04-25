<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class InstructorFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' =>fake()->phoneNumber(),
            'image' => fake()->image(),
            'created_at' => fake()->dateTime(),
        ];
    }
}
