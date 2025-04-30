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
        Schema::create('voiture', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marque_id')->nullable()->constrained('marque')->onDelete('set null');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('immatriculation')->unique();
            $table->string('modele');
            $table->string('energie');
            $table->string('couleur');
            $table->date('date_premiere_immatriculation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture');
    }
};
