@extends('layouts.new')

@section('content')
    @component('components.gestion.edit', [
        'resource' => 'Método de Pago',
        'action' => route('metodoPagos.update', $metodoPago),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Método de Pago',
        'fields' => [
            ['name' => 'nombreMetodo', 'label' => 'Nombre del Método de Pago', 'type' => 'text', 'value' => $metodoPago->nombreMetodo]
        ]
    ])
    @endcomponent
@endsection