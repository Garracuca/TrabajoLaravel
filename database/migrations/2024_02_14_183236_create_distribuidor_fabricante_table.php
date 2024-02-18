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
        Schema::create('distribuidor_fabricante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('distribuidor_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('fabricante_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distribuidor_fabricante');
    }
};
