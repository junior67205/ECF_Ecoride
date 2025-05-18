<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;

    protected $table = 'marque';

    protected $fillable = [
        'libelle'
    ];

    /**
     * Relation avec les voitures
     */
    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
} 