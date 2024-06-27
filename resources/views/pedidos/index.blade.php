@extends('layouts.new')

@section('content')
    @component('components.gestion.indexAv', [
        'title' => 'Listado de Pedidos',
        'columns' => [           
            'usuario_name' => 'Usuario',
            'tipo' => 'Tipo',
            'idMesa' => 'Mesa/Ticket',
            'platillo_name' => 'Platillo',
            'cantidad' => 'Cantidad',
            'nota' => 'Nota',
            'estado' => 'Estado'
        ],
        'data' => $pedidos,
        'editRoute' => 'pedidos.update',
        'deleteRoute' => 'pedidos.destroy',
        'idKey' => 'idPedido'
    ])
    @endcomponent
@endsection