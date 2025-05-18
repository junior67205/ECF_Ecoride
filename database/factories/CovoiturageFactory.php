<?php

namespace Database\Factories;

use App\Models\Covoiturage;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovoiturageFactory extends Factory
{
    protected $model = Covoiturage::class;

    public function definition(): array
    {
        $date_depart = $this->faker->dateTimeBetween('now', '+2 months');
        $date_arrivee = (clone $date_depart)->modify('+' . $this->faker->numberBetween(1, 5) . ' hours');
        
        $villes = [
            'Paris', 'Lyon', 'Marseille', 'Bordeaux', 'Lille', 'Toulouse', 'Nantes', 
            'Strasbourg', 'Montpellier', 'Nice', 'Rennes', 'Grenoble', 'Dijon', 
            'Angers', 'Nîmes', 'Saint-Étienne', 'Toulon', 'Le Havre', 'Reims', 'Lille'
        ];

        return [
            'voiture_id' => Voiture::factory(),
            'date_depart' => $date_depart->format('Y-m-d'),
            'heure_depart' => $date_depart->format('H:i:s'),
            'lieu_depart' => $this->faker->randomElement($villes),
            'date_arrivee' => $date_arrivee->format('Y-m-d'),
            'heure_arrivee' => $date_arrivee->format('H:i:s'),
            'lieu_arrivee' => $this->faker->randomElement(array_diff($villes, [$this->faker->randomElement($villes)])),
            'statut' => $this->faker->randomElement(['disponible', 'complet', 'annulé']),
            'nombre_places' => $this->faker->numberBetween(1, 4),
            'prix_personne' => $this->faker->randomFloat(2, 5, 50),
        ];
    }

    /**
     * Configure le modèle factory.
     */
    public function disponible(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 'disponible',
        ]);
    }

    /**
     * Configure le modèle factory pour un covoiturage complet.
     */
    public function complet(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 'complet',
            'nombre_places' => 0,
        ]);
    }

    /**
     * Configure le modèle factory pour un covoiturage annulé.
     */
    public function annule(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 'annulé',
        ]);
    }
} 