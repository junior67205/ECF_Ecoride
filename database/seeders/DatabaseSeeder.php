<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,      // Crée les utilisateurs en premier
            MarqueSeeder::class,    // Puis les marques
            VoitureSeeder::class,   // Puis les voitures
            CovoiturageSeeder::class, // Et enfin les covoiturages
        ]);
    }
}
