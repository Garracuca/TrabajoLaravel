<?php

namespace Database\Factories;

use App\Models\Mueble;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MuebleBajo>
 */
class MuebleBajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mueble_id = Mueble::where('tipo', 'B')->pluck('id')->random();

        return [
            'mueble_id'=> $mueble_id,
            'altura' => fake()->numberBetween(50, 200),
            'cantCajones' => fake()->numberBetween(2,6)
        ];
    }
}
