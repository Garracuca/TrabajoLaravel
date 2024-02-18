<?php

namespace Database\Factories;

use App\Models\Cocina;
use App\Models\Fabricante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mueble>
 */
class MuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fabricantes= Fabricante::all()->pluck('id');
        $cocinas= Cocina::all()->pluck('id'); 

        return [
            'tipo' => fake()->regexify('[A-D]{1}'),
            'fabricante_id'=> fake()->numberBetween(1, count($fabricantes)), 
            'cocina_id'=> fake()->numberBetween(1, count($cocinas)), 
            'color' => fake()->safeColorName(),
            'alto' => fake()->numberBetween(1,200),
            'ancho' => fake()->numberBetween(1,200),
            'largo' => fake()->numberBetween(1,200)
        ];
    }
}
