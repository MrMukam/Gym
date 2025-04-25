<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class subscriptionsFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'instructor_id' => $this->faker->optional()->randomElement(\App\Models\Instructor::pluck('id')->toArray()),
            'price' => $this->faker->randomFloat(2, 20, 200),
            'subscription_plan_id' => \App\Models\SubscriptionPlan::factory(),
            'created_at' => $this->faker->dateTimeThisYear(),
            'status' => $this->faker->randomElement(['active', 'expired', 'pending']),
        ];
    }
}
