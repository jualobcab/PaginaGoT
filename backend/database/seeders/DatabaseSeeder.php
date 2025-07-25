<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeders en orden de dependencias
        $this->call([
            // Primero las tablas sin dependencias
            RegionSeeder::class,
            AgeCategorySeeder::class,
            StatSeeder::class,
            QualitySeeder::class,
            DisadvantageSeeder::class,
            SpecialtySeeder::class,
            HistoricalEventSeeder::class,
            
            // Luego las que dependen de Region
            HouseSeeder::class,
            
            // Finalmente Character que depende de House y AgeCategory
            CharacterSeeder::class,
        ]);

        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
