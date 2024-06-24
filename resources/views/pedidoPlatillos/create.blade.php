@extends('layouts.new')

@section('content')
    @component('components.gestion.createAv', [
        'resource' => 'Pedido de Platillo',
        'action' => route('pedidoPlatillos.store'),
        'method' => 'POST',
        'buttonText' => 'Crear Pedido',
        'fields' => [
            [
                'name' => 'idPlatillo', 
                'label' => 'Platillo', 
                'type' => 'select', 
                'options' => $platillos->map(function($platillo) {
                    return [
                        'value' => $platillo->idPlatillo,
                        'label' => $platillo->nombre . ' - ' . $platillo->precio
                    ];
                })->toArray()
            ],
            [
                'name' => 'tipo', 
                'label' => 'Tipo', 
                'type' => 'select', 
                'options' => [
                    ['value' => 'paraLlevar', 'label' => 'Para llevar'],
                    ['value' => 'enLocal', 'label' => 'En local']
                ]
            ],
            [
                'name' => 'idMesa', 
                'label' => 'Mesa', 
                'type' => 'select', 
                'options' => $mesas->map(function($mesa) {
                    return [
                        'value' => $mesa->idMesa,
                        'label' => $mesa->numero // Ajusta según los campos de tu tabla Mesa
                    ];
                })->toArray()
            ],
            [
                'name' => 'idCuenta', 
                'label' => 'Cuenta', 
                'type' => 'text', 
                'value' => $idCuenta
            ],
            ['name' => 'cantidad', 'label' => 'Cantidad', 'type' => 'number', 'step' => '1'],
            ['name' => 'nota', 'label' => 'Nota', 'type' => 'textarea']
        ]
    ])
    @endcomponent
@endsection
