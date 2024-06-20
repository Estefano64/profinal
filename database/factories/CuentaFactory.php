<?php

namespace Database\Factories;

use App\Models\Cuenta;
use App\Models\CuentaCliente;
use App\Models\MetodoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuenta>
 */
class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'totalPagar' => $this->faker->randomFloat(2, 10, 200),
            'idCuentaCliente' => CuentaCliente::inRandomOrder()->first()->idCuentaCliente,
        'idMetodoPago' => MetodoPago::inRandomOrder()->first()->idMetodoPago,
            'estado' => $this->faker->randomElement(['pagado', 'pendiente']),
        ];
    }
}
