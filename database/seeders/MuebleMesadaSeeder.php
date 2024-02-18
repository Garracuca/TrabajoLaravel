<?php

namespace Database\Seeders;

use App\Models\MuebleMesada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuebleMesadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('mueble_mesadas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        MuebleMesada::factory()->count(10)->create();
    }
}
