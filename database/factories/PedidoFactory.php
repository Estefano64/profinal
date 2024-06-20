<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Mesa;
use App\Models\CuentaCliente;
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
            'estado' => $this->faker->randomElement(['pendiente', 'enProceso', 'completado', 'entregado']),
            'tipo' => $this->faker->randomElement(['paraLlevar', 'enLocal']),
            'idMesa' => Mesa::inRandomOrder()->first()->idMesa,
            'idCuentaCliente' => CuentaCliente::inRandomOrder()->first()->idCuentaCliente,
        ];
    }
}
