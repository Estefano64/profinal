@if(session('error'))
<div class="bg-red-500 text-white p-4 rounded mb-4">
    {{ session('error') }}
</div>
@endif
@if(session('success'))
<div class="bg-green-500 text-white p-4 rounded mb-4">
    {{ session('success') }}
</div>
@endif
<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            {{ $title }}
        </h3>
        <a href="{{ $createRoute }}" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            {{ $createButtonText }}
        </a>
    </div>
    <div class="p-6 space-y-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    @foreach($columns as $column)
                    <th scope="col" class="px-6 py-3">{{ $column }}</th>
                    @endforeach
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="bg-white border-b">
                    @foreach($columns as $key => $label)
                    <td class="px-6 py-4">
                        @if($key === 'usuario_name') {{-- Verifica 'usuario_name' en lugar de 'usuario.name' --}}
                        {{ $item->usuario->name }}
                        @else
                        {{ $item->$key }}
                        @endif
                        @if($key === 'estado')
                        <form action="{{ route($editRoute, $item) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="estado" id="estado" onchange="this.form.submit()">
                                <option value="pendiente" {{ $item->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="enProceso" {{ $item->estado === 'enProceso' ? 'selected' : '' }}>En Proceso</option>
                                <option value="completado" {{ $item->estado === 'completado' ? 'selected' : '' }}>Completado</option>
                                <option value="entregado" {{ $item->estado === 'entregado' ? 'selected' : '' }}>Entregado</option>
                            </select>
                        </form>
                        @endif
                    </td>
                    @endforeach
                    <td class="px-6 py-4">
                        <form action="{{ route($deleteRoute, $item) }}" method="POST" class="inline" onsubmit="return confirm('¿Está seguro que desea eliminar este elemento?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-3">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>