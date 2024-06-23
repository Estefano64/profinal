@extends('layouts.new')

@section('content')
    @component('components.gestion.edit', [
        'resource' => 'Cuenta Cliente',
        'action' => route('cuentaClientes.update', $cuentaCliente),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Cuenta Cliente',
        'fields' => [
            ['name' => 'nombre', 'label' => 'Nombre del Cliente', 'type' => 'text', 'value' => $cuentaCliente->nombre],
            ['name' => 'dni', 'label' => 'DNI', 'type' => 'text', 'value' => $cuentaCliente->dni]
        ]
    ])
    @endcomponent
@endsection