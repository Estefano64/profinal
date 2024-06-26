<?php

namespace Database\Factories;

use App\Models\PedidoPlatillo;
use App\Models\Cuenta;
use App\Models\Mesa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estado' => $this->faker->randomElement(['pendiente', 'completado']),
            'tipo' => $this->faker->randomElement(['paraLlevar', 'enLocal']),
            'user_id' => User::inRandomOrder()->first()->id,
            'idMesa' => Mesa::inRandomOrder()->first()->idMesa,
            'idPedidoPlatillo' => PedidoPlatillo::inRandomOrder()->first()->idPedidoPlatillo,
            'idCuenta' => Cuenta::inRandomOrder()->first()->idCuenta
        ];
    }
}