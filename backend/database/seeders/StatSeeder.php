<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'name' => 'Agility',
                'abbreviation' => 'AGI',
                'description' => 'Speed, dexterity, and physical coordination'
            ],
            [
                'name' => 'Animal Handling',
                'abbreviation' => 'ANI',
                'description' => 'Skill with animals, riding, and training'
            ],
            [
                'name' => 'Athletics',
                'abbreviation' => 'ATH',
                'description' => 'Physical prowess, climbing, jumping, swimming'
            ],
            [
                'name' => 'Awareness',
                'abbreviation' => 'AWA',
                'description' => 'Perception, alertness, and noticing details'
            ],
            [
                'name' => 'Cunning',
                'abbreviation' => 'CUN',
                'description' => 'Intelligence, reasoning, and memory'
            ],
            [
                'name' => 'Deception',
                'abbreviation' => 'DEC',
                'description' => 'Lying, acting, and disguise'
            ],
            [
                'name' => 'Endurance',
                'abbreviation' => 'END',
                'description' => 'Physical toughness and stamina'
            ],
            [
                'name' => 'Fighting',
                'abbreviation' => 'FIG',
                'description' => 'Combat skill with weapons'
            ],
            [
                'name' => 'Healing',
                'abbreviation' => 'HEA',
                'description' => 'Medical knowledge and treatment'
            ],
            [
                'name' => 'Language',
                'abbreviation' => 'LAN',
                'description' => 'Knowledge of languages and linguistics'
            ],
            [
                'name' => 'Knowledge',
                'abbreviation' => 'KNO',
                'description' => 'Education, lore, and scholarly pursuits'
            ],
            [
                'name' => 'Marksmanship',
                'abbreviation' => 'MAR',
                'description' => 'Skill with ranged weapons'
            ],
            [
                'name' => 'Persuasion',
                'abbreviation' => 'PER',
                'description' => 'Charm, leadership, and social influence'
            ],
            [
                'name' => 'Status',
                'abbreviation' => 'STA',
                'description' => 'Social standing and reputation'
            ],
            [
                'name' => 'Stealth',
                'abbreviation' => 'STE',
                'description' => 'Moving unseen and unheard'
            ],
            [
                'name' => 'Survival',
                'abbreviation' => 'SUR',
                'description' => 'Wilderness skills and tracking'
            ],
            [
                'name' => 'Thievery',
                'abbreviation' => 'THI',
                'description' => 'Lockpicking, pickpocketing, and burglary'
            ],
            [
                'name' => 'Warfare',
                'abbreviation' => 'WAR',
                'description' => 'Military strategy and tactics'
            ],
            [
                'name' => 'Will',
                'abbreviation' => 'WIL',
                'description' => 'Mental fortitude and determination'
            ]
        ];

        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
}
