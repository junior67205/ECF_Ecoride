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
        Schema::create('avis_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('avis_id')->constrained('avis')->onDelete('cascade');
            $table->boolean('est_auteur')->default(false);
            $table->timestamps();
            
            // Empêche un utilisateur d'avoir plusieurs fois le même avis
            $table->unique(['user_id', 'avis_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_user');
    }
};
