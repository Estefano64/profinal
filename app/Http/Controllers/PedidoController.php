<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra una lista de todos los pedidos pendientes, ordenados por fecha de creación.
     */
    public function index()
    {
        try {
            $pedidos = Pedido::with(['usuario', 'pedidoplatillo.platillo']) // Obtiene los pedidos con sus relaciones
                ->where('estado', 'pendiente') // Filtra los pedidos con estado 'pendiente'
                ->orderBy('created_at', 'desc') // Ordena los pedidos por fecha de creación en orden descendente
                ->get();
            return view('pedidos.index', compact('pedidos')); // Retorna la vista con los pedidos obtenidos
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los pedidos: ' . $e->getMessage()); // Redirige a la ruta 'home' con un mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige a la ruta 'home' con un mensaje de error en caso de excepción general
        }
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo pedido.
     */
    public function create()
    {
        return view('pedidos.create'); // Retorna la vista para crear un nuevo pedido
    }

    public function store(Request $request)
    {
        // Método para almacenar un nuevo pedido en la base de datos
    }

    /**
     * Display the specified resource.
     * Muestra un pedido específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar un pedido específico.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Actualiza un pedido específico en la base de datos.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all()); // Actualiza el pedido con los datos del formulario
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.'); // Redirige a la lista de pedidos con un mensaje de éxito
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un pedido específico de la base de datos.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete(); // Elimina el pedido
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.'); // Redirige a la lista de pedidos con un mensaje de éxito
    }
}
