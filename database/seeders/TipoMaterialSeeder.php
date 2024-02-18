<?php

namespace Database\Seeders;

use App\Models\TipoMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('tipo_materials')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        TipoMaterial::factory()->count(10)->create();
        
    }
}
