<!-- resources/views/mesas/create.blade.php -->

@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'resource' => 'Mesa',
        'action' => route('mesas.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Mesa',
        'fields' => [
            ['name' => 'numero', 'label' => 'Número de Mesa', 'type' => 'number'],
            ['name' => 'capacidad', 'label' => 'Capacidad', 'type' => 'number'],
            ['name' => 'estado', 'label' => 'Estado', 'type' => 'select', 'options' => [
                ['value' => 'disponible', 'label' => 'Disponible'],
                ['value' => 'ocupada', 'label' => 'Ocupada'],
                ['value' => 'reservada', 'label' => 'Reservada']
            ]]
        ]
    ])
    @endcomponent
@endsection
