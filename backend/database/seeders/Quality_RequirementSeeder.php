<?php

namespace Database\Seeders;

use App\Models\QualityRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Quality_RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requirements = [
            [
                'quality_id' => 1,
                'required_stat_id' => 18,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 4,
                'required_stat_id' => 2,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 7,
                'required_stat_id' => 14,
                'required_stat_rank' => 5
            ],
            [
                'quality_id' => 9,
                'required_stat_id' => 3,
                'required_stat_rank' =>3,
                'required_stat_id2' => 9,
                'required_stat_rank2' => 3,
                'required_specialty_id' => 19,
                'required_specialty_rank' => 1,
                'required_specialty_id2' => 38,
                'required_specialty_rank2' => 1
            ],
            [
                'quality_id' => 10,
                'required_stat_id' => 19,
                'required_stat_rank' => 5,
                'required_specialty_id' => 72,
                'required_specialty_rank' => 2,
                'required_quality_id' => 14,
                'required_quality_id2' => 113,
                'required_quality_id3' => 114             
            ],
            [
                'quality_id' => 11,
                'required_stat_id' => 14,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 12,
                'required_stat_id' => 16,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 13,
                'required_stat_id' => 14,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 14,
                'required_stat_id' => 18,
                'required_stat_rank' => 3,
                'required_specialty_id' => 66,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 15,
                'required_stat_id' => 9,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 16,
                'required_specialty_id' => 21,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 17,
                'required_stat_id' => 17,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 18,
                'required_stat_id' => 14,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 19,
                'required_stat_id' => 3,
                'required_stat_rank' => 3,
                'required_specialty_id' => 17,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 20,
                'required_quality_id' => 19
            ],
            [
                'quality_id' => 21,
                'required_quality_id' => 20
            ],
            [
                'quality_id' => 22,
                'required_stat_id' => 1,
                'required_stat_rank' => 4,
                'required_specialty_id' => 1,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 23,
                'required_stat_id' => 5,
                'required_stat_rank' => 5
            ],
            [
                'quality_id' => 24,
                'required_stat_id' => 13,
                'required_stat_rank' => 4,
                'required_specialty_id' => 46,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 25,
                'required_stat_id' => 16,
                'required_stat_rank' => 5,
                'required_specialty_id' => 59,
                'required_specialty_rank' => 3
            ],
            [
                'quality_id' => 26,
                'required_stat_id' => 16,
                'required_stat_rank' => 5
            ],
            [
                'quality_id' => 27,
                'required_stat_id' => 16,
                'required_stat_rank' => 7,
                'required_specialty_id' => 59,
                'required_specialty_rank' => 5,
                'required_quality_id' => 25
            ],
            // Dominio de las armas contundentes
            [
                'quality_id' => 28,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 12,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 29,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_specialty_id' => 12,
                'required_specialty_rank' => 3,
                'required_quality_id' => 28
            ],
            [
                'quality_id' => 30,
                'required_stat_id' => 3,
                'required_stat_rank' => 6,
                'required_specialty_id' => 12,
                'required_specialty_rank' => 4,
                'required_quality_id' => 29
            ],
            // Armas de asta
            [
                'quality_id' => 31,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 13,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 32,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_quality_id' => 31
            ],
            [
                'quality_id' => 33,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_quality_id' => 32
            ],
            // Armas de hoja corta
            [
                'quality_id' => 34,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 14,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 35,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_quality_id' => 34
            ],
            [
                'quality_id' => 36,
                'required_stat_id' => 3,
                'required_stat_rank' => 6,
                'required_quality_id' => 35
            ],
            // Armas de hoja larga
            [
                'quality_id' => 37,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 15,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 38,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_quality_id' => 37
            ],
            [
                'quality_id' => 39,
                'required_stat_id' => 3,
                'required_stat_rank' => 6,
                'required_quality_id' => 38
            ],
            // Hachas
            [
                'quality_id' => 40,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 18,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 41,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_specialty_id' => 18,
                'required_specialty_rank' => 3,
                'required_quality_id' => 40
            ],
            [
                'quality_id' => 42,
                'required_stat_id' => 3,
                'required_stat_rank' => 6,
                'required_specialty_id' => 18,
                'required_specialty_rank' => 4,
                'required_quality_id' => 41
            ],
            // Lanzas
            [
                'quality_id' => 43,
                'required_stat_id' => 3,
                'required_stat_rank' => 3,
                'required_specialty_id' => 19,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 44,
                'required_quality_id' => 43
            ],
            [
                'quality_id' => 45,
                'required_stat_id' => 2,
                'required_stat_rank' => 5,
                'required_quality_id' => 44
            ],
            // FIN ARMAS
            [
                'quality_id' => 47,
                'required_specialty_id' => 25,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 48,
                'required_stat_id' => 11,
                'required_stat_rank' => 4,
                'required_stat_id2' => 14,
                'required_stat_rank2' => 4,
            ],
            [
                'quality_id' => 50,
                'required_stat_id' => 4,
                'required_stat_rank' => 4
            ],
            // Esgrima Braavosi
            [
                'quality_id' => 51,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 17,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 52,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_specialty_id' => 17,
                'required_specialty_rank' => 2,
                'required_quality_id' => 51
            ],
            [
                'quality_id' => 53,
                'required_stat_id' => 3,
                'required_stat_rank' => 6,
                'required_specialty_id' => 17,
                'required_specialty_rank' => 3,
                'required_quality_id' => 52
            ],
            // Fin esgrima
            [
                'quality_id' => 54,
                'required_stat_id' => 1,
                'required_stat_rank' => 4,
                'required_stat_id2' => 3,
                'required_stat_rank2' => 5,
                'required_stat_id3' => 12,
                'required_stat_rank3' => 4,
            ],
            [
                'quality_id' => 56,
                'required_quality_id' => 11
            ],
            [
                'quality_id' => 59,
                'required_quality_id' => 8
            ],
            [
                'quality_id' => 61,
                'required_stat_id' => 2,
                'required_stat_rank' => 4,
                'required_specialty_id' => 8,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 62,
                'required_stat_id' => 7,
                'required_stat_rank' => 4,
                'required_specialty_id' => 29,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 63,
                'required_stat_id' => 17,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 66,
                'required_quality_id' => 65
            ],
            [
                'quality_id' => 69,
                'required_stat_id' => 10,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 71,
                'required_stat_id' => 10,
                'required_stat_rank' => 4,
                'required_specialty_id' => 40,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 72,
                'required_stat_id' => 16,
                'required_stat_rank' => 4,
                'required_specialty_id' => 58,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 73,
                'required_stat_id' => 12,
                'required_stat_rank' => 3,
                'required_quality_id' => 50
            ],
            [
                'quality_id' => 75,
                'required_quality_id' => 74
            ],
            [
                'quality_id' => 77,
                'required_quality_id' => 76
            ],
            // Escudos
            [
                'quality_id' => 78,
                'required_stat_id' => 3,
                'required_stat_rank' => 3,
                'required_specialty_id' => 16,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 79,
                'required_stat_id' => 4,
                'required_stat_rank' => 4,
                'required_stat_id2' => 14,
                'required_stat_rank2' => 3
            ],
            [
                'quality_id' => 80,
                'required_quality_id' => 11
            ],
            [
                'quality_id' => 81,
                'required_stat_id' => 1,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 82,
                'required_stat_id' => 12,
                'required_stat_rank' => 2,
                'required_specialty_id' => 45,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 83,
                'required_quality_id' => 8
            ],
            [
                'quality_id' => 84,
                'required_stat_id' => 8,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 85,
                'required_stat_id' => 19,
                'required_stat_rank' => 3,
                'required_specialty_id' => 72,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 88,
                'required_stat_id' => 19,
                'required_stat_rank' => 3,
                'required_specialty_id' => 72,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 89,
                'required_stat_id' => 12,
                'required_stat_rank' => 4,
                'required_specialty_id' => 43,
                'required_specialty_rank' => 1
            ],
            // Puños de Acero
            [
                'quality_id' => 90,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 20,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 91,
                'required_stat_id' => 3,
                'required_stat_rank' => 4,
                'required_specialty_id' => 20,
                'required_specialty_rank' => 3,
                'required_quality_id' => 90
            ],
            [
                'quality_id' => 92,
                'required_stat_id' => 3,
                'required_stat_rank' => 5,
                'required_specialty_id' => 20,
                'required_specialty_rank' => 5,
                'required_quality_id' => 91
            ],
            // Fin Puños
            [
                'quality_id' => 96,
                'required_specialty_id' => 37,
                'required_specialty_rank' => 2
            ],
            [
                'quality_id' => 98,
                'required_stat_id' => 5,
                'required_stat_rank' => 3,
                'required_specialty_id' => 25,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 99,
                'required_stat_id' => 6,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 107,
                'required_stat_id' => 19,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 108,
                'required_stat_id' => 13,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 109,
                'required_stat_id' => 13,
                'required_stat_rank' => 4
            ],
            [
                'quality_id' => 111,
                'required_stat_id' => 9,
                'required_stat_rank' => 3,
                'required_specialty_id' => 35,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 112,
                'required_stat_id' => 4,
                'required_stat_rank' => 3
            ],
            [
                'quality_id' => 114,
                'required_stat_id' => 19,
                'required_stat_rank' => 4,
                'required_specialty_id' => 72,
                'required_specialty_rank' => 1,
                'required_quality_id' => 14,
                'required_quality_id2' => 113
            ],
            [
                'quality_id' => 116,
                'required_quality_id' => 8
            ],
            [
                'quality_id' => 117,
                'required_stat_id' => 7,
                'required_stat_rank' => 3,
                'required_specialty_id' => 28,
                'required_specialty_rank' => 1
            ],
            [
                'quality_id' => 119,
                'required_stat_id' => 12,
                'required_stat_rank' => 5,
                'required_stat_id' => 19,
                'required_stat_rank' => 4,
                'required_quality_id' => 113
            ]
        ];
        
        foreach ($requirements as $r) {
            QualityRequirement::create($r);
        }
    }
}
