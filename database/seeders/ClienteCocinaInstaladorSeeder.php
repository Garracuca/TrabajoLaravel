<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Cocina;
use App\Models\Instalador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteCocinaInstaladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente_cocina_instalador')->truncate();
// hay que utilizar querybuilder porque no hay modelo propio
// hay que USAR EL modelo de partner y book
    $clientes= Cliente::InRandomOrder()->get(); //SOLO CAMPO ID    
    $cocinas= Cocina::InRandomOrder()->get();
    $instaladors= Instalador::InRandomOrder()->get();

   foreach ($cocinas as $cocina){
        foreach($clientes as $cliente){
            foreach ($instaladors as $instalador) {
                DB::table('cliente_cocina_instalador')->insert([
                'fecha'=>now(),
                'cliente_id'=>$cliente->id,
                'cocina_id'=> $cocina->id,
                'instalador_id' => $instalador->id,
                'cantidad' => random_int(1,10),
                'created_at'=>now(),
                'updated_at'=>now(),

                ]);
            }

        }



   }
    }
}
