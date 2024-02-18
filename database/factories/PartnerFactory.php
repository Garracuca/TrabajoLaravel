<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => fake()->dni(),
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'edad' =>fake()-> numberBetween(18,100),
            'email' =>fake()->email()
        ];
        
    }
}
