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
     */
    public function index()
    {
        try {
            $pedidos = Pedido::with(['usuario', 'pedidoplatillo.platillo'])
            ->where('estado', 'pendiente')
            ->orderBy('created_at', 'desc')
            ->get();
            return view('pedidos.index', compact('pedidos'));
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los pedidos: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
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
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
