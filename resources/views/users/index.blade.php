
@extends('layouts.new')

@section('content')
    @component('components.gestion.index', [
        'title' => 'Listado de Usuarios',
        'createRoute' => route('users.create'),
        'createButtonText' => 'Nuevo Usuario',
        'columns' => [
            'name' => 'Nombre',
            'email' => 'Email',
            'nivelAcceso' => 'Nivel de Acceso',
            'DNI' => 'DNI',
            'direccion' => 'Dirección',
            'telefono' => 'Teléfono',
            'rol' => 'Rol'
        ],
        'data' => $users,
        'editRoute' => 'users.edit',
        'deleteRoute' => 'users.destroy',
        'idKey' => 'id'
    ])
    @endcomponent
@endsection