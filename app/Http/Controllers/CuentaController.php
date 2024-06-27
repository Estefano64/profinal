<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\PedidoPlatillo;
use App\Models\Pedido;
use App\Models\MetodoPago;
use App\Models\CuentaCliente;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // Paso 1: Obtener las cuentas con estado 'pendiente'
            $cuentas = Cuenta::where('estado', 'pendiente')
                ->orderBy('created_at', 'desc')
                ->get();

            foreach ($cuentas as $cuenta) {
                // Inicializar subtotal en 0
                $subtotal = 0;

                // Paso 2: Obtener los pedidos relacionados con la cuenta
                $pedidos = Pedido::where('idCuenta', $cuenta->idCuenta)->get();

                // Paso 3: Obtener los registros de PedidoPlatillo y calcular el subtotal
                foreach ($pedidos as $pedido) {
                    $pedidoPlatillos = PedidoPlatillo::where('idPedidoPlatillo', $pedido->idPedidoPlatillo)->get();

                    foreach ($pedidoPlatillos as $pedidoPlatillo) {
                        $subtotal += $pedidoPlatillo->total;
                    }
                }

                // Calcular impuesto y total
                $impuesto = $subtotal * 0.18;
                $total = $subtotal + $impuesto;

                // Paso 4: Actualizar la cuenta con los nuevos valores
                $cuenta->subtotal = $subtotal;
                $cuenta->impuesto = $impuesto;
                $cuenta->total = $total;

                $cuenta->save();
            }

            return view('cuentas.index', compact('cuentas'));
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al cargar las cuentas: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            // Crear una nueva cuenta con valores por defecto
            $cuenta = new Cuenta();
            $cuenta->idCuentaCliente = 1; // Cambia este valor según tu lógica
            $cuenta->idMetodoPago = 1; // Cambia este valor según tu lógica
            $cuenta->estado = 'pendiente';
            $cuenta->subtotal = 0;
            $cuenta->impuesto = 0;
            $cuenta->total = 0;
            $cuenta->save();

            return redirect()->route('cuentas.index')->with('success', 'Cuenta creada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->route('cuentas.index')->with('error', 'Error al crear la cuenta: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('cuentas.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuenta $cuenta)
{

}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuenta $cuenta)
    {
        try {
            $cuentaClientes = CuentaCliente::all();
            $metodosPago = MetodoPago::all();
            $pedidos = Pedido::with(['pedidoplatillo.platillo'])
                ->where('idCuenta', $cuenta->idCuenta)
                ->get();
            return view('cuentas.edit', compact('cuenta', 'cuentaClientes', 'metodosPago', 'pedidos'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentas.index')->with('error', 'Cuenta no encontrada.');
        } catch (Exception $e) {
            return redirect()->route('cuentas.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuenta $cuenta)
    {
        try {
            $request->validate([
                'idCuentaCliente' => 'nullable|exists:cuenta_clientes,idCuentaCliente', // Asegurar que idCuentaCliente exista en cuenta_clientes
                'idMetodoPago' => 'nullable|exists:metodo_pagos,idMetodoPago',   // Asegurar que idMetodoPago exista en metodo_pagos
                'estado' => 'required|string|in:pagado,pendiente', // Validar el estado
                'subtotal' => 'required|numeric', // Validar el subtotal
                'impuesto' => 'required|numeric', // Validar el impuesto
                'total' => 'required|numeric', // Validar el total
            ]);

            $cuenta->update($request->all());
            return redirect()->route('cuentas.index')->with('success', 'Cuenta finalizada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al finalizar la cuenta, prueba otro número');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentas.index')->with('error', 'Cuenta no encontrada.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
