<?php

namespace Database\Seeders;

use App\Models\Fabricante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('fabricantes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Fabricante::factory()->count(10)->create();
    }
}
