<?php

namespace Database\Seeders;

use App\Models\Marque;
use Illuminate\Database\Seeder;

class MarqueSeeder extends Seeder
{
    /**
     * Liste des marques de voitures à insérer
     */
    private array $marques = [
        'Renault',
        'Peugeot',
        'Citroën',
        'Volkswagen',
        'Toyota',
        'Ford',
        'Fiat',
        'Opel',
        'Mercedes-Benz',
        'BMW',
        'Audi',
        'Nissan',
        'Hyundai',
        'Kia',
        'Dacia',
        'Tesla',
        'Volvo',
        'Skoda',
        'Seat',
        'Mini',
        'Smart',
        'Suzuki',
        'Mazda',
        'Honda',
        'Mitsubishi',
        'Jeep',
        'Land Rover',
        'Jaguar',
        'Porsche',
        'Ferrari'
    ];

    /**
     * Exécute le seeder
     */
    public function run(): void
    {
        foreach ($this->marques as $marque) {
            Marque::create([
                'libelle' => $marque
            ]);
        }
    }
} 