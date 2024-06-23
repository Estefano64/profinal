@extends('layouts.new')

@section('content')
    @component('components.gestion.create', [
        'resource' => 'Método de Pago',
        'action' => route('metodoPagos.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Método de Pago',
        'fields' => [
            ['name' => 'nombreMetodo', 'label' => 'Nombre del Método de Pago', 'type' => 'text']
        ]
    ])
    @endcomponent
@endsection