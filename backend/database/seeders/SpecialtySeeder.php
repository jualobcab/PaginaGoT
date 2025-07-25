<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener algunos stats para asociar especialidades
        $fighting = Stat::where('name', 'Fighting')->first();
        $marksmanship = Stat::where('name', 'Marksmanship')->first();
        $knowledge = Stat::where('name', 'Knowledge')->first();
        $persuasion = Stat::where('name', 'Persuasion')->first();
        $stealth = Stat::where('name', 'Stealth')->first();

        $specialties = [
            [
                'name' => 'Long Blades',
                'stat_id' => $fighting->id,
                'description' => 'Skill with swords and similar weapons'
            ],
            [
                'name' => 'Brawling',
                'stat_id' => $fighting->id,
                'description' => 'Unarmed combat and improvised weapons'
            ],
            [
                'name' => 'Axes',
                'stat_id' => $fighting->id,
                'description' => 'Skill with axes and hatchets'
            ],
            [
                'name' => 'Bows',
                'stat_id' => $marksmanship->id,
                'description' => 'Skill with bows and arrows'
            ],
            [
                'name' => 'Crossbows',
                'stat_id' => $marksmanship->id,
                'description' => 'Skill with crossbows and bolts'
            ],
            [
                'name' => 'History',
                'stat_id' => $knowledge->id,
                'description' => 'Knowledge of past events and lineages'
            ],
            [
                'name' => 'Religion',
                'stat_id' => $knowledge->id,
                'description' => 'Knowledge of faiths and gods'
            ],
            [
                'name' => 'Heraldry',
                'stat_id' => $knowledge->id,
                'description' => 'Knowledge of house symbols and genealogy'
            ],
            [
                'name' => 'Charm',
                'stat_id' => $persuasion->id,
                'description' => 'Winning people over with personality'
            ],
            [
                'name' => 'Intimidate',
                'stat_id' => $persuasion->id,
                'description' => 'Threatening and coercing others'
            ],
            [
                'name' => 'Sneak',
                'stat_id' => $stealth->id,
                'description' => 'Moving quietly and unseen'
            ],
            [
                'name' => 'Blend In',
                'stat_id' => $stealth->id,
                'description' => 'Hiding in plain sight among crowds'
            ]
        ];

        foreach ($specialties as $specialty) {
            Specialty::create($specialty);
        }
    }
}
