<?php

namespace App\Http\Controllers;

use App\Models\Mesa; // Importa el modelo Mesa
use Illuminate\Http\Request; // Importa la clase Request para manejar solicitudes HTTP
use Illuminate\Database\QueryException; // Importa la excepción QueryException para manejar errores de base de datos
use Illuminate\Database\Eloquent\ModelNotFoundException; // Importa la excepción ModelNotFoundException para manejar errores de modelo no encontrado
use Exception; // Importa la excepción general Exception

class MesaController extends Controller
{
    public function index()
    {
        try {
            $mesas = Mesa::all(); // Recupera todas las mesas
            return view('mesas.index', compact('mesas')); // Retorna la vista con las mesas
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar las mesas: ' . $e->getMessage()); // Maneja errores de base de datos
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function create()
    {
        return view('mesas.create'); // Retorna la vista para crear una nueva mesa
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'numero' => 'required|integer', // Valida el campo 'numero'
                'capacidad' => 'required|integer', // Valida el campo 'capacidad'
                'estado' => 'required|string|in:disponible,ocupada,reservada', // Valida el campo 'estado'
            ]);

            Mesa::create($request->all()); // Crea una nueva mesa con los datos validados
            return redirect()->route('mesas.index')->with('success', 'Mesa creada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear la mesa, prueba otro número' ); // Maneja errores de base de datos
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function edit(Mesa $mesa)
    {
        try {
            return view('mesas.edit', compact('mesa')); // Retorna la vista para editar una mesa
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.'); // Maneja error de mesa no encontrada
        } catch (Exception $e) {
            return redirect()->route('mesas.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function update(Request $request, Mesa $mesa)
    {
        try {
            $request->validate([
                'numero' => 'required|integer', // Valida el campo 'numero'
                'capacidad' => 'required|integer', // Valida el campo 'capacidad'
                'estado' => 'required|string|in:disponible,ocupada,reservada', // Valida el campo 'estado'
            ]);

            $mesa->update($request->all()); // Actualiza la mesa con los datos validados
            return redirect()->route('mesas.index')->with('success', 'Mesa actualizada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar la mesa, prueba otro número'); // Maneja errores de base de datos
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.'); // Maneja error de mesa no encontrada
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function destroy(Mesa $mesa)
    {
        try {
            $mesa->delete(); // Elimina la mesa
            return redirect()->route('mesas.index')->with('success', 'Mesa eliminada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar la mesa: ' . $e->getMessage()); // Maneja errores de base de datos
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.'); // Maneja error de mesa no encontrada
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }
}
