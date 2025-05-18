<?php

namespace Database\Factories;

use App\Models\Marque;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoitureFactory extends Factory
{
    protected $model = Voiture::class;

    /**
     * Liste des modèles par marque
     */
    private array $modeles = [
        'Renault' => ['Clio', 'Megane', 'Captur', 'Twingo', 'Kadjar', 'Zoe', 'Scenic', 'Talisman'],
        'Peugeot' => ['208', '308', '3008', '508', '2008', '5008', 'Rifter', 'Partner'],
        'Citroën' => ['C3', 'C4', 'C5', 'Berlingo', 'C3 Aircross', 'C4 Picasso', 'DS3', 'DS4'],
        'Volkswagen' => ['Golf', 'Polo', 'Passat', 'T-Roc', 'Tiguan', 'Arteon', 'ID.3', 'ID.4'],
        'Toyota' => ['Yaris', 'Corolla', 'RAV4', 'C-HR', 'Prius', 'Camry', 'Aygo', 'Hilux'],
        'Ford' => ['Fiesta', 'Focus', 'Kuga', 'Puma', 'Mustang', 'Ranger', 'Explorer', 'Transit'],
        'Fiat' => ['500', 'Panda', 'Tipo', 'Doblo', '500X', '500L', 'Punto', 'Ducato'],
        'Opel' => ['Corsa', 'Astra', 'Mokka', 'Crossland', 'Grandland', 'Insignia', 'Movano', 'Vivaro'],
        'Mercedes-Benz' => ['Classe A', 'Classe C', 'Classe E', 'GLC', 'GLA', 'SLC', 'Sprinter', 'Vito'],
        'BMW' => ['Série 1', 'Série 3', 'Série 5', 'X1', 'X3', 'X5', 'Z4', 'i3'],
        'Audi' => ['A3', 'A4', 'A6', 'Q3', 'Q5', 'Q7', 'TT', 'e-tron'],
        'Nissan' => ['Micra', 'Qashqai', 'Juke', 'X-Trail', 'Leaf', 'Navara', 'NV200', 'NV300'],
        'Hyundai' => ['i10', 'i20', 'i30', 'Tucson', 'Kona', 'Santa Fe', 'IONIQ', 'Bayon'],
        'Kia' => ['Picanto', 'Rio', 'Ceed', 'Sportage', 'Sorento', 'Stonic', 'EV6', 'Niro'],
        'Dacia' => ['Sandero', 'Duster', 'Logan', 'Spring', 'Jogger', 'Dokker', 'Lodgy', 'Pickup'],
        'Tesla' => ['Model 3', 'Model S', 'Model X', 'Model Y', 'Cybertruck', 'Roadster'],
        'Volvo' => ['XC40', 'XC60', 'XC90', 'V60', 'V90', 'C40', 'S60', 'S90'],
        'Skoda' => ['Fabia', 'Octavia', 'Kodiaq', 'Karoq', 'Superb', 'Scala', 'Enyaq', 'Kamiq'],
        'Seat' => ['Ibiza', 'Leon', 'Arona', 'Ateca', 'Tarraco', 'Mii', 'Born', 'Cupra'],
        'Mini' => ['Cooper', 'Countryman', 'Clubman', 'Paceman', 'Electric', 'John Cooper Works'],
        'Smart' => ['Fortwo', 'Forfour', 'EQ', 'Brabus', 'Crossblade', 'Roadster'],
        'Suzuki' => ['Swift', 'Vitara', 'Jimny', 'S-Cross', 'Across', 'Ignis', 'Baleno'],
        'Mazda' => ['2', '3', '6', 'CX-3', 'CX-5', 'CX-30', 'MX-5', 'MX-30'],
        'Honda' => ['Jazz', 'Civic', 'CR-V', 'HR-V', 'e', 'NSX', 'Jazz Crosstar'],
        'Mitsubishi' => ['Space Star', 'ASX', 'Eclipse Cross', 'Outlander', 'L200', 'i-MiEV'],
        'Jeep' => ['Renegade', 'Compass', 'Cherokee', 'Grand Cherokee', 'Wrangler', 'Gladiator'],
        'Land Rover' => ['Defender', 'Discovery', 'Range Rover', 'Range Rover Sport', 'Range Rover Evoque'],
        'Jaguar' => ['XE', 'XF', 'F-Pace', 'E-Pace', 'I-Pace', 'F-Type'],
        'Porsche' => ['911', 'Cayenne', 'Macan', 'Panamera', 'Taycan', 'Boxster', 'Cayman'],
        'Ferrari' => ['F8', 'SF90', '296', 'Roma', 'Purosangue', 'Monza SP1', 'Monza SP2']
    ];

    /**
     * Liste des énergies possibles
     */
    private array $energies = [
        'Essence',
        'Diesel',
        'Électrique',
        'Hybride',
        'GPL',
        'Hybride rechargeable'
    ];

    /**
     * Liste des couleurs courantes
     */
    private array $couleurs = [
        'Noir',
        'Blanc',
        'Gris',
        'Rouge',
        'Bleu',
        'Vert',
        'Jaune',
        'Orange',
        'Marron',
        'Beige'
    ];

    public function definition(): array
    {
        $marque = Marque::inRandomOrder()->first();
        $modele = $this->faker->randomElement($this->modeles[$marque->libelle] ?? ['Modèle inconnu']);
        
        // Génération d'une plaque d'immatriculation française au format AA-123-BB
        $lettres1 = strtoupper($this->faker->randomLetter . $this->faker->randomLetter);
        $chiffres = $this->faker->numberBetween(1, 999);
        $lettres2 = strtoupper($this->faker->randomLetter . $this->faker->randomLetter);
        $immatriculation = sprintf('%s-%03d-%s', $lettres1, $chiffres, $lettres2);

        return [
            'marque_id' => $marque->id,
            'modele' => $modele,
            'energie' => $this->faker->randomElement($this->energies),
            'couleur' => $this->faker->randomElement($this->couleurs),
            'immatriculation' => $immatriculation,
            'date_premiere_immatriculation' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'user_id' => User::factory(), // Crée un nouvel utilisateur pour chaque voiture
        ];
    }
} 