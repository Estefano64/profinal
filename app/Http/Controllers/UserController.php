<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all();
            return view('users.index', compact('users'));
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los usuarios: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'nivelAcceso' => 'required|string',
                'DNI' => 'required|string|unique:users',
                'direccion' => 'required|string',
                'telefono' => 'required|string',
                'rol' => 'required|string',
            ]);

            User::create($request->all());
            return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el usuario: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function edit(User $user)
    {
        try {
            return view('users.edit', compact('user'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            return redirect()->route('users.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function update(Request $request, User $user)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'nivelAcceso' => 'required|string',
                'DNI' => 'required|string|unique:users,DNI,' . $user->id,
                'direccion' => 'required|string',
                'telefono' => 'required|string',
                'rol' => 'required|string',
            ]);

            $user->update($request->all());
            return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el usuario: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar el usuario: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage());
        }
    }
}
