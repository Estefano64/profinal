<?php

namespace Database\Factories;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mesa>
 */
class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->unique()->numberBetween(1, 20),
            'capacidad' => $this->faker->numberBetween(2, 10),
            'estado' => $this->faker->randomElement(['disponible', 'ocupada']),
        ];
    }
}

