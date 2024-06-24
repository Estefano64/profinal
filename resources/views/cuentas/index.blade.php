@extends('layouts.new')

@section('content')
    @component('components.gestion.indexCuenta', [
        'title' => 'Listado de Cuentas',
        'createRoute' => route('cuentas.create'), // Ajusta esta ruta según sea necesario
        'createButtonText' => 'Nueva Cuenta',
        'columns' => [
            'idCuenta' => 'ID',
            'estado' => 'Estado',
            'subtotal' => 'Subtotal',
            'impuesto' => 'Impuesto',
            'total' => 'Total'
        ],
        'data' => $cuentas,
        'editRoute' => 'cuentas.edit', // Ajusta esta ruta según sea necesario
        'deleteRoute' => 'cuentas.destroy', // Ajusta esta ruta según sea necesario
        'idKey' => 'idCuenta'
    ])
    @endcomponent
@endsection