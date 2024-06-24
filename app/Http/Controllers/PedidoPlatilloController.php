<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoPlatillo;
use App\Models\Platillo;
use App\Models\Pedido;
use App\Models\Mesa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class PedidoPlatilloController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $platillos = Platillo::all();
        $mesas = Mesa::all(); // Obtener todas las mesas
        $idCuenta = $request->idCuenta; // Obtener idCuenta del request

        return view('pedidoPlatillos.create', compact('platillos', 'mesas', 'idCuenta'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'idPlatillo' => 'required|exists:platillos,idPlatillo',
                'cantidad' => 'required|integer|min:1',
                'nota' => 'nullable|string|max:100',
                'tipo' => 'required|in:paraLlevar,enLocal',
                'idMesa' => 'nullable|exists:mesas,idMesa',
                'idCuenta' => 'required|integer|exists:cuentas,idCuenta',
            ]);

            if ($request->tipo == 'enLocal') {
                $request->validate([
                    'idMesa' => 'required|exists:mesas,idMesa',
                ]);
            }

            // se crea PedidoPlatillo
            $pedidoPlatillo = new PedidoPlatillo();
            $pedidoPlatillo->idPlatillo = $request->idPlatillo; // Asigna el ID del platillo desde el request
            $pedidoPlatillo->cantidad = $request->cantidad; // Asigna la cantidad desde el request
            $pedidoPlatillo->nota = $request->nota; // Asigna la nota desde el request
            $pedidoPlatillo->save(); // Guarda el registro en la base de datos

            // se crea Pedido
            $pedido = new Pedido();
            $pedido->idCuenta = $request->idCuenta;
            $pedido->tipo = $request->tipo;
            $pedido->idMesa = $request->idMesa;
            $pedido->idPedidoPlatillo = $pedidoPlatillo->idPedidoPlatillo; // Vincula el PedidoPlatillo con el Pedido
            $pedido->user_id = Auth::id(); // Asigna el user_id del usuario autenticado
            $pedido->save();

            return redirect()->route('cuentas.index')->with('success', 'Pedido creado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el pedido de platillo, verifica los datos e intenta nuevamente.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
