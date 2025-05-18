<?php

namespace Database\Seeders;

use App\Models\Covoiturage;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Database\Seeder;

class CovoiturageSeeder extends Seeder
{
    /**
     * Exécute le seeder
     */
    public function run(): void
    {
        // Créer quelques utilisateurs si nécessaire
        $users = User::factory(5)->create();

        // Créer des voitures pour chaque utilisateur
        foreach ($users as $user) {
            Voiture::factory()
                ->count(2)
                ->create(['user_id' => $user->id]);
        }

        // Créer des covoiturages disponibles
        Covoiturage::factory()
            ->count(20)
            ->disponible()
            ->create();

        // Créer quelques covoiturages complets
        Covoiturage::factory()
            ->count(5)
            ->complet()
            ->create();

        // Créer quelques covoiturages annulés
        Covoiturage::factory()
            ->count(3)
            ->annule()
            ->create();
    }
} 