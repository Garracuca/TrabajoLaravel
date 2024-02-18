<?php

namespace Database\Seeders;

use App\Models\MuebleAlto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuebleAltoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('mueble_altos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        MuebleAlto::factory()->count(10)->create();
    }
}
