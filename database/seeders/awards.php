<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class awards extends Seeder
{

    public function run(): void
    {
        if (Instructor::count() === 0) {
            $this->call(InstructorSeeder::class);
        }

        $awards = [
            [
                'name' => 'Best Yoga Instructor',
                'note' => 'Awarded for outstanding yoga instruction in 2023',
                'image' => 'awards/yoga_instructor.jpg'
            ],
            [
                'name' => 'CrossFit Champion',
                'note' => 'Regional CrossFit competition winner 2023',
                'image' => 'awards/crossfit_champion.jpg'
            ],
            [
                'name' => 'Most Popular Zumba Instructor',
                'note' => 'Voted by members for most engaging classes',
                'image' => 'awards/zumba_instructor.jpg'
            ],
            [
                'name' => 'Best New Instructor',
                'note' => 'Recognized for exceptional first year performance',
                'image' => 'awards/new_instructor.jpg'
            ],
            [
                'name' => 'Lifetime Achievement',
                'note' => '20 years of dedicated service to fitness education',
                'image' => 'awards/lifetime_achievement.jpg'
            ]
        ];

        foreach ($awards as $award) {
            awards::create([
                'name' => $award['name'],
                'note' => $award['note'],
                'instructor_id' => Instructor::inRandomOrder()->first()->id,
                'image' => $award['image']
            ]);
    }
}
