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
        $clientes = Cliente::inRandomOrder()->get(); //SOLO CAMPO ID    
        $cocinas = Cocina::inRandomOrder()->get();
        $instaladors = Instalador::inRandomOrder()->get();
        $fechasUnicas = $this->fechasAleatorias(count($cocinas) * count($clientes) * count($instaladors));

        $index = 0;

        foreach ($cocinas as $cocina) {
            foreach ($clientes as $cliente) {
                foreach ($instaladors as $instalador) {
                    $fechaAleatoria = $fechasUnicas[$index++];
                    DB::table('cliente_cocina_instalador')->insert([
                        'fecha' => $fechaAleatoria,
                        'cliente_id' => $cliente->id,
                        'cocina_id' => $cocina->id,
                        'instalador_id' => $instalador->id,
                        'cantidad' => random_int(1, 10),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    private function fechasAleatorias(int $count): array
    {
        $dates = [];
        $existingDates = DB::table('cliente_cocina_instalador')->pluck('fecha')->toArray();

        while ($count > 0) {
            $year = mt_rand(date('Y') - 5, date('Y'));
            $month = mt_rand(1, 12);
            $day = mt_rand(1, 28);

            $fechaAleatoria = sprintf('%04d-%02d-%02d', $year, $month, $day);

            if (!in_array($fechaAleatoria, $existingDates)) {
                $dates[] = $fechaAleatoria;
                $existingDates[] = $fechaAleatoria;
                $count--;
            }
        }

        return $dates;
    }
}
