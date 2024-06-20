<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idCuenta = Cuenta::inRandomOrder()->first()->idCuenta ?? 1; // Asigna 1 si no hay registros en la tabla cuentas

        return [
            'idCuenta' => $idCuenta,
        ];
        }
}
