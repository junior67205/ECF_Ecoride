<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('covoiturage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voiture_id')->constrained('voiture')->onDelete('cascade');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->string('lieu_depart');
            $table->date('date_arrivee');
            $table->time('heure_arrivee');
            $table->string('lieu_arrivee');
            $table->string('statut');
            $table->integer('nombre_places');
            $table->decimal('prix_personne', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage');
    }
};
