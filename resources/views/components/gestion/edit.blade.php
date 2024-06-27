<!-- resources/views/components/form.blade.php -->
@if(session('error'))
<div class="bg-red-500 text-white p-4 rounded mb-4">
    {{ session('error') }}
</div>
@endif
<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Editar {{ $resource }}
        </h3>
    </div>
    <div class="p-6 space-y-6">
        <form action="{{ $action }}" method="POST">
            @csrf
            @if($method === 'PUT')
            @method('PUT')
            @endif
            <div class="grid grid-cols-6 gap-6">
                @foreach($fields as $field)
                <div class="col-span-6 sm:col-span-3">
                    <label for="{{ $field['name'] }}" class="text-sm font-medium text-gray-900 block mb-2">{{ $field['label'] }}</label>
                    @if($field['type'] === 'select')
                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        @foreach($field['options'] as $option)
                        <option value="{{ $option['value'] }}" {{ isset($field['value']) && $field['value'] === $option['value'] ? 'selected' : '' }}>{{ $option['label'] }}</option>
                        @endforeach
                    </select>
                    @else
                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" value="{{ $field['value'] ?? '' }}" required>
                    @endif
                </div>
                @endforeach
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">{{ $buttonText }}</button>
            </div>
        </form>
    </div>
</div>

<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="p-6 space-y-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    @foreach($columns as $key => $column)
                    <th scope="col" class="px-6 py-3 @if(in_array($key, ['usuario_name', 'tipo', 'idMesa'])) bg-gray-200 @else bg-gray-300 @endif">{{ $column }}</th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 bg-gray-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="bg-white border-b">
                    @foreach($columns as $key => $label)
                    <td class="px-6 py-4 @if(in_array($key, ['usuario_name', 'tipo', 'idMesa'])) bg-gray-100 @else bg-gray-200 @endif">
                        @if($key === 'usuario_name')
                        {{ $item->usuario->name }}
                        @elseif($key === 'platillo_name')
                        {{ $item->pedidoplatillo->platillo->nombre }}
                        @elseif($key === 'cantidad')
                        {{ $item->pedidoplatillo->cantidad }}
                        @elseif($key === 'nota')
                        {{ $item->pedidoplatillo->nota }}
                        @else
                        {{ $item->$key }}
                        @endif
                    </td>
                    @endforeach
                    <td class="px-6 py-4 bg-gray-200">
                        <form action="{{ route($editRoute, $item) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="estado" value="completado">
                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-3">Marcar como Completado</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>