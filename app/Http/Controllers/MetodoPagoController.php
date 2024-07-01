<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class MetodoPagoController extends Controller
{
    // Muestra una lista de todos los métodos de pago
    public function index()
    {
        try {
            $metodoPagos = MetodoPago::all();
            return view('metodoPagos.index', compact('metodoPagos'));
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los métodos de pago: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    // Muestra el formulario para crear un nuevo método de pago
    public function create()
    {
        return view('metodoPagos.create');
    }

    // Almacena un nuevo método de pago en la base de datos
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombreMetodo' => 'required|string|max:50',
            ]);
            
            MetodoPago::create($request->all());
            return redirect()->route('metodoPagos.index')->with('success', 'Método de pago creado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el método de pago: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    // Muestra el formulario para editar un método de pago existente
    public function edit(MetodoPago $metodoPago)
    {
        try {
            return view('metodoPagos.edit', compact('metodoPago'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('metodoPagos.index')->with('error', 'Método de pago no encontrado.');
        } catch (Exception $e) {
            return redirect()->route('metodoPagos.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    // Actualiza un método de pago existente en la base de datos
    public function update(Request $request, MetodoPago $metodoPago)
    {
        try {
            $request->validate([
                'nombreMetodo' => 'required|string|max:50',
            ]);
            
            $metodoPago->update($request->all());
            return redirect()->route('metodoPagos.index')->with('success', 'Método de pago actualizado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el método de pago: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('metodoPagos.index')->with('error', 'Método de pago no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    // Elimina un método de pago existente de la base de datos
    public function destroy(MetodoPago $metodoPago)
    {
        try {
            $metodoPago->delete();
            return redirect()->route('metodoPagos.index')->with('success', 'Método de pago eliminado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar el método de pago: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('metodoPagos.index')->with('error', 'Método de pago no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }
}
