<?php

namespace Database\Seeders;

use App\Models\MueblePanel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MueblePanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('mueble_panels')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        MueblePanel::factory()->count(10)->create();
    }
}