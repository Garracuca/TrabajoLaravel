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
        // Schema::dropIfExists('modules'); el truqui de rafael para cuando falla la referencia a clave ajena
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('code',6);
            $table->string('name');
            $table->integer('hours');
            $table->bigInteger('study_id')->unsigned();
            $table->foreign('study_id')->references('id')->on('studies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
