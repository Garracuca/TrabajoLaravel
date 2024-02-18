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
        Schema::create('cliente_cocina_instalador', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->unique();
            $table->foreignId('cliente_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('cocina_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('instalador_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_cocina_instalador');
    }
};
