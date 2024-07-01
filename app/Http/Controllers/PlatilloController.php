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
            $platillos = Platillo::all(); // Obtiene todos los registros de platillos
            return view('platillos.index', compact('platillos')); // Retorna la vista 'platillos.index' con los platillos obtenidos
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los platillos: ' . $e->getMessage()); // Redirige a 'home' con un mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige a 'home' con un mensaje de error en caso de excepción general
        }
    }

    public function create()
    {
        return view('platillos.create'); // Retorna la vista para crear un nuevo platillo
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:40', // Valida que 'nombre' sea requerido, tipo string y máximo de 40 caracteres
                'descripcion' => 'required|string|max:100', // Valida que 'descripcion' sea requerida, tipo string y máximo de 100 caracteres
                'precio' => 'required|numeric|min:0', // Valida que 'precio' sea requerido, tipo numérico y mínimo de 0
            ]);

            Platillo::create($request->all()); // Crea un nuevo platillo con los datos del request
            return redirect()->route('platillos.index')->with('success', 'Platillo creado exitosamente.'); // Redirige a la lista de platillos con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el platillo: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function edit(Platillo $platillo)
    {
        try {
            return view('platillos.edit', compact('platillo')); // Retorna la vista para editar el platillo especificado
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.'); // Redirige con mensaje de error en caso de que el platillo no sea encontrado
        } catch (Exception $e) {
            return redirect()->route('platillos.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function update(Request $request, Platillo $platillo)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:40', // Valida que 'nombre' sea requerido, tipo string y máximo de 40 caracteres
                'descripcion' => 'required|string|max:100', // Valida que 'descripcion' sea requerida, tipo string y máximo de 100 caracteres
                'precio' => 'required|numeric|min:0', // Valida que 'precio' sea requerido, tipo numérico y mínimo de 0
            ]);

            $platillo->update($request->all()); // Actualiza el platillo con los datos del request
            return redirect()->route('platillos.index')->with('success', 'Platillo actualizado exitosamente.'); // Redirige a la lista de platillos con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el platillo: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.'); // Redirige con mensaje de error en caso de que el platillo no sea encontrado
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function destroy(Platillo $platillo)
    {
        try {
            $platillo->delete(); // Elimina el platillo especificado
            return redirect()->route('platillos.index')->with('success', 'Platillo eliminado exitosamente.'); // Redirige a la lista de platillos con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar el platillo: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (ModelNotFoundException $e) {
            return redirect()->route('platillos.index')->with('error', 'Platillo no encontrado.'); // Redirige con mensaje de error en caso de que el platillo no sea encontrado
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }
}
