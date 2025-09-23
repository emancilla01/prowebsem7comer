<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->sentence(10),
            'fecha' => fake()->date(),
            'cliente_id'=> cliente::factory(),
        ];
    }
}
