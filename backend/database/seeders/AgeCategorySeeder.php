<?php

namespace Database\Seeders;

use App\Models\AgeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ageCategories = [
            [
                'name' => 'Niño',
                'max_stat_rank' => 4,
                'experience_points' => 120,
                'specialty_points' => 40,
                'destiny_points' => 7,
                'min_disadvantages' => 0,
            ],
            [
                'name' => 'Adolescente',
                'max_stat_rank' => 4,
                'experience_points' => 150,
                'specialty_points' => 40,
                'destiny_points' => 6,
                'min_disadvantages' => 0,
            ],
            [
                'name' => 'Joven',
                'max_stat_rank' => 5,
                'experience_points' => 180,
                'specialty_points' => 60,
                'destiny_points' => 5,
                'min_disadvantages' => 0,
            ],
            [
                'name' => 'Adulto',
                'max_stat_rank' => 7,
                'experience_points' => 210,
                'specialty_points' => 80,
                'destiny_points' => 4,
                'min_disadvantages' => 1,
                'info' => 'Una cualquiera'
            ],
            [
                'name' => 'Mediana Edad',
                'max_stat_rank' => 6,
                'experience_points' => 240,
                'specialty_points' => 100,
                'destiny_points' => 3,
                'min_disadvantages' => 1,
                'info' => 'Un defecto cualquiera de las siguientes: Agilidad, Brío o Constitución'
            ],
            [
                'name' => 'Anciano',
                'max_stat_rank' => 5,
                'experience_points' => 270,
                'specialty_points' => 160,
                'destiny_points' => 2,
                'min_disadvantages' => 2,
                'info' => 'Una cualquiera más un defecto para cualquiera de las siguientes habilidades: Agilidad, Brío, Combate cuerpo a cuerpo, Constitución, Ingenio, Percepción o Puntería'
            ],
            [
                'name' => 'Muy Anciano',
                'max_stat_rank' => 5,
                'experience_points' => 330,
                'specialty_points' => 200,
                'destiny_points' => 1,
                'min_disadvantages' => 3,
                'info' => 'Una cualquiera más un defecto para dos cualesquiera de las siguientes habilidades: Agilidad, Brío, Combate cuerpo a cuerpo, Constitución, Ingenio, Percepción o Puntería'
            ],
            [
                'name' => 'Venerable',
                'max_stat_rank' => 5,
                'experience_points' => 360,
                'specialty_points' => 240,
                'destiny_points' => 0,
                'min_disadvantages' => 4,
                'info' => 'Una cualquiera más un defecto para tres cualesquiera de las siguientes habilidades: Agilidad, Brío, Combate cuerpo a cuerpo, Constitución, Ingenio, Percepción o Puntería'
            ]
        ];

        foreach ($ageCategories as $category) {
            AgeCategory::create($category);
        }
    }
}
