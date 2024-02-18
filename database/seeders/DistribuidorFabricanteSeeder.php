<?php

namespace Database\Seeders;

use App\Models\Distribuidor;
use App\Models\Fabricante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistribuidorFabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('distribuidor_fabricante')->truncate();
        // hay que utilizar querybuilder porque no hay modelo propio
        // hay que USAR EL modelo de partner y book
           $fabricantes= Fabricante::all()->pluck('id'); //SOLO CAMPO ID    
           $distribuidors= Distribuidor::InRandomOrder()->get();
        
           foreach ($fabricantes as $fabricante){
                foreach($distribuidors as $distribuidor){
                    DB::table('distribuidor_fabricante')->insert([
                        'fabricante_id'=> $fabricante,
                        'distribuidor_id'=>$distribuidor->id,
                        'created_at'=>now(),
                        'updated_at'=>now(),
        
                    ]);
        
                }
        
           }
    }
}
