<!-- resources/views/components/edit-form.blade.php -->
<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Editar {{ $resourceName }}
        </h3>
    </div>
    <div class="p-6 space-y-6">
        <form action="{{ route($routeName . '.update', $resource->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-6 gap-6">
                @foreach($fields as $field)
                    <div class="col-span-6 sm:col-span-3">
                        <label for="{{ $field['name'] }}" class="text-sm font-medium text-gray-900 block mb-2">{{ $field['label'] }}</label>
                        @if($field['type'] === 'select')
                            <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                                @foreach($field['options'] as $option)
                                    <option value="{{ $option['value'] }}" {{ $resource->{$field['name']} === $option['value'] ? 'selected' : '' }}>{{ $option['label'] }}</option>
                                @endforeach
                            </select>
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" value="{{ $resource->{$field['name']} }}" required>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Actualizar {{ $resourceName }}</button>
            </div>
        </form>
    </div>
</div>