<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @auth
                @if(Auth::user()->rol === 'Encargado')
                    Bienvenido encargado, ¿qué haremos hoy?
                @elseif(Auth::user()->rol === 'Mozo')
                    ¡Empecemos con los pedidos :)
                @else
                    Bienvenido, {{ Auth::user()->name }}!
                @endif
            @else
                Bienvenido, por favor inicia sesión.
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth
                        @if(Auth::user()->rol === 'Encargado')
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('mesas.index') }}" class="inline-block px-4 py-2 bg-green-500 text-white font-bold rounded hover:bg-green-700 transition duration-300">
                                    {{ __('Mesas') }}
                                </a>
                                <a href="{{ route('platillos.index') }}" class="inline-block px-4 py-2 bg-red-500 text-white font-bold rounded hover:bg-red-700 transition duration-300">
                                    {{ __('Platos') }}
                                </a>
                                <a href="{{ route('cuentaClientes.index') }}" class="inline-block px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-700 transition duration-300">
                                    {{ __('Clientes') }}
                                </a>
                                <a href="{{ route('metodoPagos.index') }}" class="inline-block px-4 py-2 bg-purple-500 text-white font-bold rounded hover:bg-purple-700 transition duration-300">
                                    {{ __('MétodosPago') }}
                                </a>
                                <a href="{{ route('pedidos.index') }}" class="inline-block px-4 py-2 bg-pink-500 text-white font-bold rounded hover:bg-pink-700 transition duration-300">
                                    {{ __('Listado pedidos') }}
                                </a>
                                <a href="{{ route('cuentas.index') }}" class="inline-block px-4 py-2 bg-orange-500 text-white font-bold rounded hover:bg-orange-700 transition duration-300">
                                    {{ __('Crear y gestionar cuenta') }}
                                </a>
                                <a href="{{ route('users.index') }}" class="inline-block px-4 py-2 bg-teal-500 text-white font-bold rounded hover:bg-teal-700 transition duration-300">
                                    {{ __('Empleados') }}
                                </a>
                            </div>
                        @elseif(Auth::user()->rol === 'Mozo')
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('pedidos.index') }}" class="inline-block px-4 py-2 bg-pink-500 text-white font-bold rounded hover:bg-pink-700 transition duration-300">
                                    {{ __('Listado pedidos') }}
                                </a>
                                <a href="{{ route('cuentas.index') }}" class="inline-block px-4 py-2 bg-orange-500 text-white font-bold rounded hover:bg-orange-700 transition duration-300">
                                    {{ __('Crear y gestionar cuenta') }}
                                </a>
                            </div>
                        @else
                            <p class="text-gray-600">Bienvenido, {{ Auth::user()->name }}. Tu rol no tiene acciones específicas definidas.</p>
                        @endif
                    @else
                        <p class="text-gray-600">Bienvenido, por favor inicia sesión para acceder a las funciones.</p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>