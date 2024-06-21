<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platillos = Platillo::all();
        return view('platillos.index', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'nombre' => 'required|string|max:40',
            'descripcion' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
        ]);

        // Crear un nuevo Platillo
        Platillo::create($request->all());

        // Redirigir a la lista de platillos con un mensaje de éxito
        return redirect()->route('platillos.index')->with('success', 'Platillo creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platillo $platillo)
    {
        return view('platillos.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platillo $platillo)
    {
        // Validar los datos del request
        $request->validate([
            'nombre' => 'required|string|max:40',
            'descripcion' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
        ]);

        // Actualizar el Platillo
        $platillo->update($request->all());

        // Redirigir a la lista de platillos con un mensaje de éxito
        return redirect()->route('platillos.index')->with('success', 'Platillo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platillo $platillo)
    {
        // Eliminar el Platillo
        $platillo->delete();

        // Redirigir a la lista de platillos con un mensaje de éxito
        return redirect()->route('platillos.index')->with('success', 'Platillo eliminado exitosamente.');
    }
}