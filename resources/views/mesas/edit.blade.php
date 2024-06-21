<!-- resources/views/mesas/edit.blade.php -->

@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'title' => 'Editar Mesa',
        'action' => route('mesas.update', $mesa),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Mesa',
        'fields' => [
            ['name' => 'numero', 'label' => 'Número de Mesa', 'type' => 'number', 'value' => $mesa->numero],
            ['name' => 'capacidad', 'label' => 'Capacidad', 'type' => 'number', 'value' => $mesa->capacidad],
            ['name' => 'estado', 'label' => 'Estado', 'type' => 'select', 'options' => [
                ['value' => 'disponible', 'label' => 'Disponible'],
                ['value' => 'ocupada', 'label' => 'Ocupada'],
                ['value' => 'reservada', 'label' => 'Reservada']
            ], 'value' => $mesa->estado]
        ]
    ])
    @endcomponent
@endsection
