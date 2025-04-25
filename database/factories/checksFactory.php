<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class checksFactory extends Factory
{

    public function definition(): array
    {
        return [
            'check_in' => $checkIn,
            'check_out' => $this->faker->optional()->dateTimeBetween($checkIn, '+2 hours'),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
