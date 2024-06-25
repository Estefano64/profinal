@extends('layouts.new')

@section('content')
    @component('components.gestion.edit', [
        'resource' => 'Empleados',
        'action' => route('users.update', $user),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Usuario',
        'fields' => [
            ['name' => 'name', 'label' => 'Nombre', 'type' => 'text', 'value' => $user->name],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'value' => $user->email],
            ['name' => 'nivelAcceso', 'label' => 'Nivel de Acceso', 'type' => 'select', 'options' => [
                ['value' => 'I', 'label' => 'I'],
                ['value' => 'II', 'label' => 'II'],
                ['value' => 'III', 'label' => 'III']
            ], 'value' => $user->nivelAcceso],
            ['name' => 'DNI', 'label' => 'DNI', 'type' => 'text', 'value' => $user->DNI],
            ['name' => 'direccion', 'label' => 'Dirección', 'type' => 'text', 'value' => $user->direccion],
            ['name' => 'telefono', 'label' => 'Teléfono', 'type' => 'text', 'value' => $user->telefono],
            ['name' => 'rol', 'label' => 'Rol', 'type' => 'select', 'options' => [
                ['value' => 'mozo', 'label' => 'Mozo'],
                ['value' => 'encargado', 'label' => 'Encargado'],
                ['value' => 'cajero', 'label' => 'Cajero']
            ], 'value' => $user->rol]
        ]
    ])
    @endcomponent
@endsection