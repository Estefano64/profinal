<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class PlatilloController extends Controller
{
    public function index()
    {
        try {
            $platillos = Platillo::all();
            return view('platillos.index', compact('platillos'));
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los platillos: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('platillos.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:40',
                'descripcion' => 'required|string|max:100',
                'precio' => 'required|numeric|min:0',
            ]);
            
            Platillo::create($request->all());
            return redirect()->route('platillos.index')->with('success', 'Platillo creado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el platillo: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function edit(Platillo $platillo)
    {
        try {
            return view('platillos.edit', compact('platillo'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.');
        } catch (Exception $e) {
            return redirect()->route('platillos.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Platillo $platillo)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:40',
                'descripcion' => 'required|string|max:100',
                'precio' => 'required|numeric|min:0',
            ]);
            
            $platillo->update($request->all());
            return redirect()->route('platillos.index')->with('success', 'Platillo actualizado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el platillo: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function destroy(Platillo $platillo)
    {
        try {
            $platillo->delete();
            return redirect()->route('platillos.index')->with('success', 'Platillo eliminado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar el platillo: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }
}