<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voiture extends Model
{
    use HasFactory;

    protected $table = 'voiture';

    protected $fillable = [
        'marque_id',
        'modele',
        'energie',
        'couleur',
        'immatriculation',
        'date_premiere_immatriculation',
        'user_id'
    ];

    protected $casts = [
        'date_premiere_immatriculation' => 'date'
    ];

    /**
     * Relation avec la marque
     */
    public function marque(): BelongsTo
    {
        return $this->belongsTo(Marque::class);
    }

    /**
     * Relation avec les covoiturages
     */
    public function covoiturages(): HasMany
    {
        return $this->hasMany(Covoiturage::class);
    }

    /**
     * Relation avec l'utilisateur
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
