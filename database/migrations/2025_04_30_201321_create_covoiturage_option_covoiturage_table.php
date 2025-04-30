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
        Schema::create('covoiturage_option_covoiturage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('covoiturage_id')->constrained('covoiturage')->onDelete('cascade');
            $table->foreignId('option_covoiturage_id')->constrained('option_covoiturage')->onDelete('restrict');
            $table->timestamps();
            
            // Empêche d'avoir la même option plusieurs fois pour un covoiturage
            $table->unique(['covoiturage_id', 'option_covoiturage_id'], 'covoiturage_option_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage_option_covoiturage');
    }
};
