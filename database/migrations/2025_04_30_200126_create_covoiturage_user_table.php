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
        Schema::create('covoiturage_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('covoiturage_id')->constrained('covoiturage')->onDelete('cascade');
            $table->boolean('est_conducteur')->default(false);
            $table->timestamps();
            
            // Empêche un utilisateur de s'inscrire plusieurs fois au même covoiturage
            $table->unique(['user_id', 'covoiturage_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage_user');
    }
};
