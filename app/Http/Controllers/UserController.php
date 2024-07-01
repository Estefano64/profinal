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
            $users = User::all(); // Obtiene todos los usuarios
            return view('users.index', compact('users')); // Retorna la vista 'users.index' con los usuarios obtenidos
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Error al cargar los usuarios: ' . $e->getMessage()); // Redirige a 'home' con un mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige a 'home' con un mensaje de error en caso de excepción general
        }
    }

    public function create()
    {
        return view('users.create'); // Retorna la vista para crear un nuevo usuario
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255', // Valida que 'name' sea requerido, tipo string y máximo de 255 caracteres
                'email' => 'required|string|email|max:255|unique:users', // Valida que 'email' sea requerido, tipo email y único en la tabla 'users'
                'password' => 'required|string|min:8|confirmed', // Valida que 'password' sea requerido, tipo string, mínimo de 8 caracteres y confirmación
                'nivelAcceso' => 'required|string',
                'DNI' => 'required|string|unique:users', // Valida que 'DNI' sea requerido, tipo string y único en la tabla 'users'
                'direccion' => 'required|string',
                'telefono' => 'required|string',
                'rol' => 'required|string',
            ]);

            User::create($request->all()); // Crea un nuevo usuario con los datos del request
            return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.'); // Redirige a la lista de usuarios con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al crear el usuario: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function edit(User $user)
    {
        try {
            return view('users.edit', compact('user')); // Retorna la vista para editar el usuario especificado
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.'); // Redirige con mensaje de error en caso de que el usuario no sea encontrado
        } catch (Exception $e) {
            return redirect()->route('users.index')->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function update(Request $request, User $user)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255', // Valida que 'name' sea requerido, tipo string y máximo de 255 caracteres
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Valida que 'email' sea requerido, tipo email, único en la tabla 'users' excluyendo el usuario actual
                'nivelAcceso' => 'required|string',
                'DNI' => 'required|string|unique:users,DNI,' . $user->id, // Valida que 'DNI' sea requerido, tipo string, único en la tabla 'users' excluyendo el usuario actual
                'direccion' => 'required|string',
                'telefono' => 'required|string',
                'rol' => 'required|string',
            ]);

            $user->update($request->all()); // Actualiza el usuario con los datos del request
            return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.'); // Redirige a la lista de usuarios con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el usuario: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.'); // Redirige con mensaje de error en caso de que el usuario no sea encontrado
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete(); // Elimina el usuario especificado
            return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.'); // Redirige a la lista de usuarios con un mensaje de éxito
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error al eliminar el usuario: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción de consulta
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado.'); // Redirige con mensaje de error en caso de que el usuario no sea encontrado
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error inesperado: ' . $e->getMessage()); // Redirige con mensaje de error en caso de excepción general
        }
    }
}
