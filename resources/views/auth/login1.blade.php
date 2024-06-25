@extends('layouts.show')

@section('content')
<x-guest-layout>
    <div class="py-16">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url('https://static.mercadonegro.pe/wp-content/uploads/2023/07/14135654/pollo-a-la-brasa.jpg')">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Registrate</h2>
                <p class="text-xl text-gray-600 text-center">Para unirte a la familia</p>
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input id="name" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>

                    <div class="mt-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico</label>
                        <input id="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="email" :value="old('email')" required autocomplete="username">
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                        <input id="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password" required autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña</label>
                        <input id="password_confirmation" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <label for="rol" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
                        <select id="rol" name="rol" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" required>
                            <option value="">Seleccione un rol</option>
                            <option value="Mozo">Mozo</option>
                            <option value="Encargado">Encargado</option>
                            <option value="Cajero">Cajero</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="nivelAcceso" class="block text-gray-700 text-sm font-bold mb-2">Nivel de Acceso</label>
                        <select id="nivelAcceso" name="nivelAcceso" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" required>
                            <option value="">Seleccione un nivel</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="DNI" class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
                        <input id="DNI" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="DNI" :value="old('DNI')" required>
                    </div>

                    <div class="mt-4">
                        <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección</label>
                        <input id="direccion" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="direccion" :value="old('direccion')">
                    </div>

                    <div class="mt-4">
                        <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
                        <input id="telefono" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="telefono" :value="old('telefono')">
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="ms-4 bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
@endsection


<div class="flex items-center gap-2">
                <button onclick="window.location.href='{{ route('login') }}'" class="hidden px-4 py-2 text-xs font-bold uppercase text-white bg-gradient-to-tr from-gray-900 to-gray-800 rounded-lg shadow-md transition-all hover:shadow-lg active:opacity-85 lg:inline-block" type="button">
                    Iniciar Sesión
                </button>
            </div>
            