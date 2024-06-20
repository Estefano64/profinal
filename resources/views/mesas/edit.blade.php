@extends('layouts.new')

@section('content')
<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Editar Mesa
        </h3>
    </div>
    <div class="p-6 space-y-6">
        <form action="{{ route('mesas.update', $mesa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="numero" class="text-sm font-medium text-gray-900 block mb-2">Número de Mesa</label>
                    <input type="number" name="numero" id="numero" value="{{ $mesa->numero }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="capacidad" class="text-sm font-medium text-gray-900 block mb-2">Capacidad</label>
                    <input type="number" name="capacidad" id="capacidad" value="{{ $mesa->capacidad }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="estado" class="text-sm font-medium text-gray-900 block mb-2">Estado</label>
                    <select name="estado" id="estado" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        <option value="disponible" {{ $mesa->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="ocupada" {{ $mesa->estado == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                        <option value="reservada" {{ $mesa->estado == 'reservada' ? 'selected' : '' }}>Reservada</option>
                    </select>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection