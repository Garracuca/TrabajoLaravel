<?php

namespace Database\Factories;

use App\Models\Mueble;
use App\Models\TipoMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MuebleMesada>
 */
class MuebleMesadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tipoMaterial= TipoMaterial::all()->pluck('id');
        $mueble_id = Mueble::where('tipo', 'C')->pluck('id')->random();

        return [
            'tipo_material_id'=> fake()->numberBetween(1, count($tipoMaterial)),
            'mueble_id'=> $mueble_id
        ];
    }
}
