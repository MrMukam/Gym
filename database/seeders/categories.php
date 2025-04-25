<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categories extends Seeder
{

    public function run(): void
    {
        $categories = [
            ['name' => 'Yoga'],
            ['name' => 'Pilates'],
            ['name' => 'CrossFit'],
            ['name' => 'Zumba'],
            ['name' => 'Boxing'],
            ['name' => 'Spinning'],
            ['name' => 'HIIT'],
            ['name' => 'Strength Training'],
            ['name' => 'Cardio'],
            ['name' => 'Dance Fitness']
        ];

        foreach ($categories as $category) {
            Category::create($category);
    }
}
