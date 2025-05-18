<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée un utilisateur admin
        User::factory()->create([
            'civilite' => 'M.',
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'pseudo' => 'admin',
            'email' => 'admin@ecoride.fr',
            'password' => bcrypt('admin123'),
            'date_naissance' => '1990-01-01',
            'adresse' => '1 rue de l\'Administration',
            'ville' => 'Paris',
            'code_postal' => '75001',
            'telephone' => '0612345678',
        ]);

        // Crée 20 utilisateurs normaux
        User::factory(20)->create();

        // Crée 5 utilisateurs avec photo
        User::factory(5)->avecPhoto()->create();
    }
} 