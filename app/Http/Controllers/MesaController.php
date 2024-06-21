<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class MesaController extends Controller
{
    public function index()
    {
        try {
            $mesas = Mesa::all();
            return view('mesas.index', compact('mesas'));
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar las mesas: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('mesas.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'numero' => 'required|integer',
                'capacidad' => 'required|integer',
                'estado' => 'required|string|in:disponible,ocupada,reservada',
            ]);

            Mesa::create($request->all());
            return redirect()->route('mesas.index')->with('success', 'Mesa creada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear la mesa, prueba otro número' );
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function edit(Mesa $mesa)
    {
        try {
            return view('mesas.edit', compact('mesa'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.');
        } catch (Exception $e) {
            return redirect()->route('mesas.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Mesa $mesa)
    {
        try {
            $request->validate([
                'numero' => 'required|integer',
                'capacidad' => 'required|integer',
                'estado' => 'required|string|in:disponible,ocupada,reservada',
            ]);

            $mesa->update($request->all());
            return redirect()->route('mesas.index')->with('success', 'Mesa actualizada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar la mesa, prueba otro número');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function destroy(Mesa $mesa)
    {
        try {
            $mesa->delete();
            return redirect()->route('mesas.index')->with('success', 'Mesa eliminada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar la mesa: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('mesas.index')->with('error', 'Mesa no encontrada.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }
}