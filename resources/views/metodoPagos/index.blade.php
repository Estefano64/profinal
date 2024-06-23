@extends('layouts.new')

@section('content')
    @component('components.gestion.index', [
        'title' => 'Listado de Métodos de Pago',
        'createRoute' => route('metodoPagos.create'),
        'createButtonText' => 'Nuevo Método de Pago',
        'columns' => ['nombreMetodo' => 'Nombre del Método'],
        'data' => $metodoPagos,
        'editRoute' => 'metodoPagos.edit',
        'deleteRoute' => 'metodoPagos.destroy',
        'idKey' => 'idMetodoPago'
    ])
    @endcomponent
@endsection