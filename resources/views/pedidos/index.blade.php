@extends('layouts.new')

@section('content')
    @component('components.gestion.indexAv', [
        'title' => 'Listado de Pedidos',
        'createRoute' => route('pedidos.create'),
        'createButtonText' => 'Nuevo Pedido',
        'columns' => [
            'created_at' => 'Generado',
            'tipo' => 'Tipo',
            'idMesa' => 'Mesa',
            'usuario_name' => 'Usuario',
            'idCuenta' => 'Cuenta',
            'estado' => 'Estado'
        ],
        'data' => $pedidos,
        'editRoute' => 'pedidos.update',
        'deleteRoute' => 'pedidos.destroy',
        'idKey' => 'idPedido'
    ])
    @endcomponent
@endsection