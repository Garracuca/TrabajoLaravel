<?php

namespace Database\Seeders;

use App\Models\Instalador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstaladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('instaladors')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Instalador::factory()->count(10)->create();
    }
}
