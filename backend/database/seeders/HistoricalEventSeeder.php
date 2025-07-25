<?php

namespace Database\Seeders;

use App\Models\HistoricalEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoricalEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Calamidad',
                'defense_throw' => '-2d6',
                'influence_throw' => '-2d6',
                'lands_throw' => '-2d6',
                'law_throw' => '-2d6',
                'population_throw' => '-2d6',
                'power_throw' => '-2d6',
                'fortune_throw' => '-2d6'
            ],
            [
                'name' => 'Derrota',
                'defense_throw' => '-1d6',
                'influence_throw' => '-1d6',
                'lands_throw' => '-1d6',
                'law_throw' => '',
                'population_throw' => '-1d6',
                'power_throw' => '-1d6',
                'fortune_throw' => '-1d6'
            ],
            [
                'name' => 'Catástrofe',
                'defense_throw' => '',
                'influence_throw' => '',
                'lands_throw' => '',
                'law_throw' => '-1d6',
                'population_throw' => '-1d6',
                'power_throw' => '-1d6',
                'fortune_throw' => '-1d6'
            ],
            [
                'name' => 'Locura',
                'defense_throw' => '6-2d6',
                'influence_throw' => '6-2d6',
                'lands_throw' => '6-2d6',
                'law_throw' => '6-2d6',
                'population_throw' => '6-2d6',
                'power_throw' => '6-2d6',
                'fortune_throw' => '6-2d6'
            ],
            [
                'name' => 'Invasión/Rebelión',
                'defense_throw' => '',
                'influence_throw' => '',
                'lands_throw' => '',
                'law_throw' => '-2d6',
                'population_throw' => '-1d6',
                'power_throw' => '-1d6',
                'fortune_throw' => '-1d6'
            ],
            [
                'name' => 'Escándalo',
                'defense_throw' => '',
                'influence_throw' => '-1d6',
                'lands_throw' => '-1d6',
                'law_throw' => '',
                'population_throw' => '',
                'power_throw' => '-1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Traición',
                'defense_throw' => '',
                'influence_throw' => '-1d6',
                'lands_throw' => '',
                'law_throw' => '-1d6',
                'population_throw' => '',
                'power_throw' => '1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Declive',
                'defense_throw' => '',
                'influence_throw' => '-1d6',
                'lands_throw' => '-1d6',
                'law_throw' => '-1d6',
                'population_throw' => '',
                'power_throw' => '-1d6',
                'fortune_throw' => '-1d6'
            ],
            [
                'name' => 'Infraestructura',
                'defense_throw' => 'special',
                'influence_throw' => '',
                'lands_throw' => '',
                'law_throw' => '',
                'population_throw' => '',
                'power_throw' => '',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Auge',
                'defense_throw' => '',
                'influence_throw' => '1d6',
                'lands_throw' => '1d6',
                'law_throw' => '',
                'population_throw' => '',
                'power_throw' => '1d6',
                'fortune_throw' => '1d6'
            ],
            [
                'name' => 'Favor',
                'defense_throw' => '',
                'influence_throw' => '1d6',
                'lands_throw' => '1d6',
                'law_throw' => '1d6',
                'population_throw' => '',
                'power_throw' => '1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Victoria',
                'defense_throw' => '1d6',
                'influence_throw' => '1d6',
                'lands_throw' => '',
                'law_throw' => '',
                'population_throw' => '',
                'power_throw' => '1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Villano',
                'defense_throw' => '',
                'influence_throw' => '1d6',
                'lands_throw' => '',
                'law_throw' => '-1d6',
                'population_throw' => '-1d6',
                'power_throw' => '1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Gloria',
                'defense_throw' => '1d6',
                'influence_throw' => '1d6',
                'lands_throw' => '',
                'law_throw' => '1d6',
                'population_throw' => '',
                'power_throw' => '1d6',
                'fortune_throw' => ''
            ],
            [
                'name' => 'Conquista',
                'defense_throw' => '-1d6',
                'influence_throw' => '1d6',
                'lands_throw' => '1d6',
                'law_throw' => '-1d6',
                'population_throw' => '1d6',
                'power_throw' => '',
                'fortune_throw' => '1d6'
            ],
            [
                'name' => 'Ventura',
                'defense_throw' => '1d6',
                'influence_throw' => '2d6',
                'lands_throw' => '1d6',
                'law_throw' => '1d6',
                'population_throw' => '1d6',
                'power_throw' => '2d6',
                'fortune_throw' => '2d6'
            ]
        ];

        foreach ($events as $event) {
            HistoricalEvent::create($event);
        }
    }
}
