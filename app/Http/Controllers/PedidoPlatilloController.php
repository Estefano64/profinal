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
        // Método para mostrar una lista de todos los pedidos de platillos (actualmente vacío)
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo pedido de platillo.
     */
    public function create(Request $request)
    {
        $platillos = Platillo::all(); // Obtiene todos los platillos
        $mesas = Mesa::all(); // Obtiene todas las mesas
        $idCuenta = $request->idCuenta; // Obtiene idCuenta del request

        return view('pedidoPlatillos.create', compact('platillos', 'mesas', 'idCuenta')); // Retorna la vista para crear un nuevo pedido de platillo
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'idPlatillo' => 'required|exists:platillos,idPlatillo', // Valida que idPlatillo sea requerido y exista en la tabla platillos
                'cantidad' => 'required|integer|min:1', // Valida que cantidad sea un entero mínimo de 1
                'nota' => 'nullable|string|max:100', // Valida que nota sea opcional, tipo string y máximo de 100 caracteres
                'tipo' => 'required|in:paraLlevar,enLocal', // Valida que tipo sea requerido y uno de los valores especificados
                'idMesa' => 'nullable|exists:mesas,idMesa', // Valida que idMesa sea opcional y exista en la tabla mesas
                'idCuenta' => 'required|integer|exists:cuentas,idCuenta', // Valida que idCuenta sea requerido, entero y exista en la tabla cuentas
            ]);

            if ($request->tipo == 'enLocal') {
                $request->validate([
                    'idMesa' => 'required|exists:mesas,idMesa', // Si el tipo es 'enLocal', valida que idMesa sea requerido y exista en la tabla mesas
                ]);
            }

            // Crea un nuevo PedidoPlatillo
            $pedidoPlatillo = new PedidoPlatillo();
            $pedidoPlatillo->idPlatillo = $request->idPlatillo; // Asigna el ID del platillo desde el request
            $pedidoPlatillo->cantidad = $request->cantidad; // Asigna la cantidad desde el request
            $pedidoPlatillo->nota = $request->nota; // Asigna la nota desde el request
            $pedidoPlatillo->save(); // Guarda el registro en la base de datos

            // Crea un nuevo Pedido
            $pedido = new Pedido();
            $pedido->idCuenta = $request->idCuenta; // Asigna el ID de la cuenta desde el request
            $pedido->tipo = $request->tipo; // Asigna el tipo de pedido desde el request
            $pedido->idMesa = $request->idMesa; // Asigna el ID de la mesa desde el request (puede ser nulo)
            $pedido->idPedidoPlatillo = $pedidoPlatillo->idPedidoPlatillo; // Vincula el PedidoPlatillo con el Pedido
            $pedido->user_id = Auth::id(); // Asigna el user_id del usuario autenticado
            $pedido->save(); // Guarda el registro en la base de datos

            return redirect()->route('cuentas.index')->with('success', 'Pedido creado exitosamente.'); // Redirige a la lista de cuentas con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el pedido de platillo, verifica los datos e intenta nuevamente.'); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    /**
     * Display the specified resource.
     * Muestra un pedido de platillo específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar un pedido de platillo específico.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Actualiza un pedido de platillo específico en la base de datos.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un pedido de platillo específico de la base de datos.
     */
    public function destroy(string $id)
    {
        //
    }
}
