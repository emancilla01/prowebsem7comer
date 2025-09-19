<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rfc' => fake()->bothify('????######'),
            'nombre' => fake()->name(),
            'edad' => fake()->numberBetween(18, 65),
            'fecha_nac' => fake()->dateTimeBetween('-65 years', '-18 years'),
        ];
    }
}
