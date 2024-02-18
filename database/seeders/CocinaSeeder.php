<?php

namespace Database\Seeders;

use App\Models\Cocina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cocinas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Cocina::factory()->count(10)->create();
    }
}
