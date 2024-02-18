<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Book::truncate('books');
         DB::table('partners')->truncate('partners');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    
        // Partner::create([
        //     'dni'=> '3045678Q',
        //     'nombre' => 'pEROO',
        //     'apellidos' => 'Juzgón',
        //     'edad' => 45,
        //     'email'=> 'culopera@mierda.com',
    
        // ]);
        // Partner::create([
        //     'dni'=> '3045234R',
        //     'nombre' => 'MIerda',
        //     'apellidos' => 'Seca',
        //     'edad' => 23,
        //     'email'=> 'culopollo@mierda.es',
    
        // ]);
        Partner::factory()->count(12)->create();
    }
}
