<!-- resources/views/mesas/create.blade.php -->
@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'resource' => 'Platillo',
        'action' => route('platillos.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Platillo',
        'fields' => [
            ['name' => 'nombre', 'label' => 'Nombre del Platillo', 'type' => 'text'],
            ['name' => 'descripcion', 'label' => 'Descripción', 'type' => 'textarea'],
            ['name' => 'precio', 'label' => 'Precio', 'type' => 'number', 'step' => '0.01']
        ]
    ])
    @endcomponent
@endsection