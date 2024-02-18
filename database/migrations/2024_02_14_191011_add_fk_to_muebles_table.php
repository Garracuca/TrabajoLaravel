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
        Schema::table('muebles', function (Blueprint $table) {
            $table->bigInteger('fabricante_id')->unsigned()->default(1)->after('id');
            $table->bigInteger('cocina_id')->unsigned()->default(1)->after('id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cocina_id')->references('id')->on('cocinas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('muebles', function (Blueprint $table) {
            $table->dropForeign(['fabricante_id']);
            $table->dropColumn('fabricante_id');
            $table->dropForeign(['cocina_id']);
            $table->dropColumn('cocina_id');
        });
    }
};
