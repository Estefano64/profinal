<?php

namespace App\Http\Controllers;

use App\Models\CuentaCliente; // Importa el modelo CuentaCliente
use Illuminate\Http\Request; // Importa la clase Request para manejar solicitudes HTTP
use Illuminate\Database\QueryException; // Importa la excepción QueryException para manejar errores de base de datos
use Illuminate\Database\Eloquent\ModelNotFoundException; // Importa la excepción ModelNotFoundException para manejar errores de modelo no encontrado
use Exception; // Importa la excepción general Exception

class CuentaClienteController extends Controller
{
    public function index()
{
    try {
        $cuentaClientes = CuentaCliente::all();
        return view('cuentaClientes.index', compact('cuentaClientes')); // Recupera todas las cuentas de clientes
    } catch (QueryException $e) {
        return redirect()->route('home')->with('error', 'Error al cargar las cuentas de clientes: ' . $e->getMessage()); // Maneja errores de base de datos
    } catch (Exception $e) {
        return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
    }
}

    public function create()
    {
        return view('cuentaClientes.create'); // Retorna la vista para crear una nueva cuenta de cliente
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:50',
                'dni' => 'required|string|size:8',
            ]);
            
            CuentaCliente::create($request->all());  // Crea una nueva cuenta de cliente con los datos validados
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente creada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear la cuenta de cliente: ' . $e->getMessage()); // Maneja errores de base de datos
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function edit(CuentaCliente $cuentaCliente)
    {
        try {
            return view('cuentaClientes.edit', compact('cuentaCliente')); // Retorna la vista para editar una cuenta de cliente
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.'); // Maneja error de cuenta no encontrada
        } catch (Exception $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function update(Request $request, CuentaCliente $cuentaCliente)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:50',
                'dni' => 'required|string|size:8',
            ]);
            
            $cuentaCliente->update($request->all()); // Actualiza la cuenta de cliente con los datos validados
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente actualizada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar la cuenta de cliente: ' . $e->getMessage());  // Maneja errores de base de datos
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.'); // Maneja error de cuenta no encontrada
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }

    public function destroy(CuentaCliente $cuentaCliente)
    {
        try {
            $cuentaCliente->delete(); // Elimina la cuenta de cliente
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente eliminada exitosamente.'); // Redirige con mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar la cuenta de cliente: ' . $e->getMessage()); // Maneja errores de base de datos
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.'); // Maneja error de cuenta no encontrada
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Maneja errores generales
        }
    }
}
