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
    {Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->longText('domaine');
        $table->text('adresse');
        $table->string('identifiscal');
        $table->string('email', 191)->unique(); // Modifier la longueur maximale à 191
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
