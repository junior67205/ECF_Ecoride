<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covoiturage extends Model
{
    use HasFactory;

    protected $table = 'covoiturage';

    protected $fillable = [
        'voiture_id',
        'date_depart',
        'heure_depart',
        'lieu_depart',
        'date_arrivee',
        'heure_arrivee',
        'lieu_arrivee',
        'statut',
        'nombre_places',
        'prix_personne',
    ];

    protected $casts = [
        'date_depart' => 'date',
        'date_arrivee' => 'date',
        'heure_depart' => 'datetime',
        'heure_arrivee' => 'datetime',
        'prix_personne' => 'decimal:2',
    ];

    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
}
