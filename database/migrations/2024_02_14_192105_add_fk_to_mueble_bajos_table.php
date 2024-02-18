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
        Schema::table('mueble_bajos', function (Blueprint $table) {
            $table->bigInteger('mueble_id')->unsigned()->after('id');
            $table->foreign('mueble_id')->references('id')->on('muebles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mueble_bajos', function (Blueprint $table) {
            $table->dropForeign(['mueble_id']);
            $table->dropColumn('mueble_id');
        });
    }
};
