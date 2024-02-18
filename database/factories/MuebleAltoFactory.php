<?php

namespace Database\Factories;

use App\Models\Mueble;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MuebleAlto>
 */
class MuebleAltoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mueble_id = Mueble::where('tipo', 'A')->pluck('id')->random();

        return [
            'mueble_id' => $mueble_id,
            'cantPuertas' => $this->faker->numberBetween(2, 6)
        ];
    }
}
