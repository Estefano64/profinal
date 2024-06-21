@extends('layouts.new')

@section('content')
    @component('components.gestion.edit', [
        'resource' => 'Platillo',
        'action' => route('platillos.update', $platillo),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Platillo',
        'fields' => [
            ['name' => 'nombre', 'label' => 'Nombre del Platillo', 'type' => 'text', 'value' => $platillo->nombre],
            ['name' => 'descripcion', 'label' => 'Descripción', 'type' => 'textarea', 'value' => $platillo->descripcion],
            ['name' => 'precio', 'label' => 'Precio', 'type' => 'number', 'step' => '0.01', 'value' => $platillo->precio]
        ]
    ])
    @endcomponent
@endsection
