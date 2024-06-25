<!-- resources/views/users/create.blade.php -->

@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'resource' => 'Usuario',
        'action' => route('users.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Usuario',
        'fields' => [
            ['name' => 'name', 'label' => 'Nombre', 'type' => 'text'],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email'],
            ['name' => 'password', 'label' => 'Contraseña', 'type' => 'password'],
            ['name' => 'password_confirmation', 'label' => 'Confirmar Contraseña', 'type' => 'password'],
            ['name' => 'nivelAcceso', 'label' => 'Nivel de Acceso', 'type' => 'select', 'options' => [
                ['value' => 'I', 'label' => 'I'],
                ['value' => 'II', 'label' => 'II'],
                ['value' => 'III', 'label' => 'III']
            ]],
            ['name' => 'DNI', 'label' => 'DNI', 'type' => 'text'],
            ['name' => 'direccion', 'label' => 'Dirección', 'type' => 'text'],
            ['name' => 'telefono', 'label' => 'Teléfono', 'type' => 'text'],
            ['name' => 'rol', 'label' => 'Rol', 'type' => 'select', 'options' => [
                ['value' => 'mozo', 'label' => 'Mozo'],
                ['value' => 'encargado', 'label' => 'Encargado'],
                ['value' => 'cajero', 'label' => 'Cajero']
            ]]
        ]
    ])
    @endcomponent
@endsection