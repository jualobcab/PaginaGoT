<?php

namespace Database\Seeders;

use App\Models\Quality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualities = [
            [
                'name' => 'Attractive',
                'cost' => 3,
                'description' => 'You are pleasing to look at and have an easier time with social interactions'
            ],
        ];

        foreach ($qualities as $quality) {
            Quality::create($quality);
        }
    }
}
