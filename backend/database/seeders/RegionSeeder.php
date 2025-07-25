<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Desembarco del Rey',
                'probability' => '3',
                'defense' => '5',
                'influence' => '-5',
                'lands' => '-5',
                'law' => '20',
                'population' => '5',
                'power' => '-5',
                'fortune' => '-5'
            ],
            [
                'name' => 'Rocadragón',
                'probability' => '4',
                'defense' => '20',
                'influence' => '-5',
                'lands' => '-5',
                'law' => '5',
                'population' => '',
                'power' => '',
                'fortune' => '-5'
            ],
            [
                'name' => 'El Norte',
                'probability' => '5-6',
                'defense' => '5',
                'influence' => '10',
                'lands' => '20',
                'law' => '-10',
                'population' => '-5',
                'power' => '-5',
                'fortune' => '-5'
            ],
            [
                'name' => 'Las Islas del Hierro',
                'probability' => '7',
                'defense' => '10',
                'influence' => '-5',
                'lands' => '-5',
                'law' => '',
                'population' => '',
                'power' => '10',
                'fortune' => ''
            ],
            [
                'name' => 'Las Tierras de los Ríos',
                'probability' => '8-9',
                'defense' => '-5',
                'influence' => '-5',
                'lands' => '5',
                'law' => '',
                'population' => '10',
                'power' => '',
                'fortune' => '5'
            ],
            [
                'name' => 'Las Montañas de la Luna',
                'probability' => '10-11',
                'defense' => '20',
                'influence' => '10',
                'lands' => '-5',
                'law' => '-10',
                'population' => '-5',
                'power' => '',
                'fortune' => ''
            ],
            [
                'name' => 'Las Tierras de Occidente',
                'probability' => '12-13',
                'defense' => '-5',
                'influence' => '10',
                'lands' => '-5',
                'law' => '-5',
                'population' => '-5',
                'power' => '',
                'fortune' => '20'
            ],
            [
                'name' => 'El Dominio',
                'probability' => '14-15',
                'defense' => '-5',
                'influence' => '10',
                'lands' => '',
                'law' => '-5',
                'population' => '5',
                'power' => '',
                'fortune' => '5'
            ],
            [
                'name' => 'Las Tierras de la Tormenta',
                'probability' => '16-17',
                'defense' => '5',
                'influence' => '',
                'lands' => '-5',
                'law' => '10',
                'population' => '-5',
                'power' => '5',
                'fortune' => ''
            ],
            [
                'name' => 'Dorne',
                'probability' => '18',
                'defense' => '',
                'influence' => '-5',
                'lands' => '10',
                'law' => '-5',
                'population' => '',
                'power' => '10',
                'fortune' => ''
            ]
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
