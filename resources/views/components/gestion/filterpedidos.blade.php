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
    </div>
    <div class="p-6 space-y-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    @foreach($columns as $key => $column)
                    <th scope="col" class="px-6 py-3 @if(in_array($key, ['usuario_name', 'tipo', 'idMesa'])) bg-gray-200 @else bg-gray-300 @endif">{{ $column }}</th>
                    @endforeach
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
                        @elseif($key === 'platillo_precio')
                        {{ $item->pedidoplatillo->platillo->precio }}
                        @elseif($key === 'cantidad')
                        {{ $item->pedidoplatillo->cantidad }}
                        @elseif($key === 'total')
                        {{ $item->pedidoplatillo->total }}
                        @else
                        {{ $item->$key }}
                        @endif                       
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
