<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mesas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'numero' => 'required|integer',
            'capacidad' => 'required|integer',
            'estado' => 'required|string|in:disponible,ocupada,reservada',
        ]);

        // Crear una nueva Mesa
        Mesa::create($request->all());

        // Redirigir a la lista de mesas con un mensaje de éxito
        return redirect()->route('mesas.index')->with('success', 'Mesa creada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
        return view('mesas.edit', compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        // Validar los datos del request
        $request->validate([
            'numero' => 'required|integer',
            'capacidad' => 'required|integer',
            'estado' => 'required|string|in:disponible,ocupada,reservada',
        ]);

        // Actualizar la Mesa
        $mesa->update($request->all());

        // Redirigir a la lista de mesas con un mensaje de éxito
        return redirect()->route('mesas.index')->with('success', 'Mesa actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        // Eliminar la Mesa
        $mesa->delete();

        // Redirigir a la lista de mesas con un mensaje de éxito
        return redirect()->route('mesas.index')->with('success', 'Mesa eliminada exitosamente.');
    }
}
