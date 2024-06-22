@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'resource' => 'Cuenta Cliente',
        'action' => route('cuentaClientes.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Cuenta Cliente',
        'fields' => [
            ['name' => 'nombre', 'label' => 'Nombre del Cliente', 'type' => 'text'],
            ['name' => 'dni', 'label' => 'DNI', 'type' => 'text']
        ]
    ])
    @endcomponent
@endsection