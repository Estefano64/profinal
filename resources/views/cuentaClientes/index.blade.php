@extends('layouts.new')

@section('content')
    @component('components.gestion.index', [
        'title' => 'Listado de Cuentas de Clientes',
        'createRoute' => route('cuentaClientes.create'),
        'createButtonText' => 'Nueva Cuenta de Cliente',
        'columns' => ['nombre' => 'Nombre', 'dni' => 'DNI'],
        'data' => $cuentaClientes,
        'editRoute' => 'cuentaClientes.edit',
        'deleteRoute' => 'cuentaClientes.destroy',
        'idKey' => 'idCuentaCliente'
    ])
    @endcomponent
@endsection