<?php

namespace Database\Factories;

use App\Models\PedidoPlatillo;
use App\Models\Pedido;
use App\Models\Platillo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PedidoPlatillo>
 */
class PedidoPlatilloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPedido' => Pedido::inRandomOrder()->first()->idPedido,
        'idPlatillo' => Platillo::inRandomOrder()->first()->idPlatillo,
        'cantidad' => $this->faker->numberBetween(1, 5),
        ];
    }
}
