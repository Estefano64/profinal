<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mesa;
use App\Models\Platillo;
use App\Models\CuentaCliente;
use App\Models\MetodoPago;
use App\Models\Cuenta;
use App\Models\Factura;
use App\Models\Pedido;
use App\Models\PedidoPlatillo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Mesa::factory(5)->create();
        \App\Models\Platillo::factory(20)->create();
        \App\Models\CuentaCliente::factory(10)->create();
        \App\Models\MetodoPago::factory(5)->create();

        \App\Models\Cuenta::factory(15)->create();

        \App\Models\Pedido::factory(20)->create();

        \App\Models\Factura::factory(10)->create();

        \App\Models\PedidoPlatillo::factory(10)->create();
    }
}
