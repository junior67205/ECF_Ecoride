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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('role')->onDelete('restrict');
            $table->boolean('est_principal')->default(false);
            $table->timestamps();
            
            // Empêche un utilisateur d'avoir plusieurs fois le même rôle
            $table->unique(['user_id', 'role_id']);
            
            // Assure qu'un utilisateur a un seul rôle principal
            $table->unique(['user_id', 'est_principal'], 'unique_role_principal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
