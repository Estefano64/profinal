<?php

namespace App\Http\Controllers;

use App\Models\CuentaCliente;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CuentaClienteController extends Controller
{
    public function index()
{
    try {
        $cuentaClientes = CuentaCliente::all();
        return view('cuentaClientes.index', compact('cuentaClientes'));
    } catch (QueryException $e) {
        return redirect()->route('home')->with('error', 'Error al cargar las cuentas de clientes: ' . $e->getMessage());
    } catch (Exception $e) {
        return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
    }
}

    public function create()
    {
        return view('cuentaClientes.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:50',
                'dni' => 'required|string|size:8',
            ]);
            
            CuentaCliente::create($request->all());
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente creada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear la cuenta de cliente: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function edit(CuentaCliente $cuentaCliente)
    {
        try {
            return view('cuentaClientes.edit', compact('cuentaCliente'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.');
        } catch (Exception $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function update(Request $request, CuentaCliente $cuentaCliente)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:50',
                'dni' => 'required|string|size:8',
            ]);
            
            $cuentaCliente->update($request->all());
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente actualizada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar la cuenta de cliente: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function destroy(CuentaCliente $cuentaCliente)
    {
        try {
            $cuentaCliente->delete();
            return redirect()->route('cuentaClientes.index')->with('success', 'Cuenta de cliente eliminada exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar la cuenta de cliente: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('cuentaClientes.index')->with('error', 'Cuenta de cliente no encontrada.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }
}
