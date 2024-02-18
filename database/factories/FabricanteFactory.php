<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fabricante>
 */
class FabricanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rs' => fake()->company(),
            'direccion' => fake()->address(),
            'telefono' => fake()->tollFreeNumber()
        ];
    }
}
