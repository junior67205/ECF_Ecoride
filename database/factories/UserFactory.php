<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Liste des civilités possibles
     */
    private array $civilites = [
        'M.',
        'Mme',
        'Mlle'
    ];

    /**
     * Liste des villes françaises
     */
    private array $villes = [
        'Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier',
        'Bordeaux', 'Lille', 'Rennes', 'Reims', 'Le Havre', 'Saint-Étienne', 'Toulon', 'Grenoble',
        'Dijon', 'Angers', 'Nîmes', 'Villeurbanne', 'Saint-Denis', 'Le Mans', 'Aix-en-Provence',
        'Clermont-Ferrand', 'Brest', 'Limoges', 'Tours', 'Amiens', 'Perpignan', 'Metz'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $civilite = $this->faker->randomElement($this->civilites);
        $nom = $this->faker->lastName();
        $prenom = $this->faker->firstName($civilite === 'M.' ? 'male' : 'female');
        $pseudo = Str::slug($prenom . '.' . $nom . $this->faker->numberBetween(1, 999));
        $email = Str::lower($prenom . '.' . $nom . '@' . $this->faker->freeEmailDomain());
        $ville = $this->faker->randomElement($this->villes);
        
        return [
            'civilite' => $civilite,
            'nom' => $nom,
            'prenom' => $prenom,
            'pseudo' => $pseudo,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'date_naissance' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
            'adresse' => $this->faker->streetAddress(),
            'ville' => $ville,
            'code_postal' => $this->faker->postcode(),
            'telephone' => $this->faker->numerify('06########'),
            'photo' => null,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Ajoute une photo de profil
     */
    public function avecPhoto(): static
    {
        return $this->state(fn (array $attributes) => [
            'photo' => 'photos/profil/' . $this->faker->image('public/storage/photos/profil', 400, 400, 'people', false),
        ]);
    }
}
