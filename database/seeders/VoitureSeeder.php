<?php

namespace Database\Seeders;

use App\Models\Voiture;
use Illuminate\Database\Seeder;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée 50 voitures avec des données aléatoires
        Voiture::factory(50)->create();
    }
} 