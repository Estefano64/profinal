@extends('layouts.new')

@section('content')
    @component('components.gestion.editAv', [
        'resource' => 'Cuenta',
        'action' => route('cuentas.update', $cuenta),
        'method' => 'PUT',
        'buttonText' => 'Generar boleta/factura',
        'fields' => [
            ['name' => 'idCuentaCliente', 'label' => 'Cliente', 'type' => 'select', 
            'options' => $cuentaClientes->map(function($cuentaClientes) {
                    return [
                        'value' => $cuentaClientes->idCuentaCliente,
                        'label' => $cuentaClientes->nombre . ' - ' . $cuentaClientes->dni
                    ];
                })->toArray()
            ],

            ['name' => 'subtotal', 'label' => 'Subtotal', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->subtotal],
            ['name' => 'idMetodoPago', 'label' => 'Método de Pago', 'type' => 'select',
            'options' => $metodosPago->map(function($metodosPago) {
                    return [
                        'value' => $metodosPago->idMetodoPago,
                        'label' => $metodosPago->nombreMetodo
                    ];
                })->toArray()
            ],
            ['name' => 'impuesto', 'label' => 'Impuesto', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->impuesto],
            ['name' => 'estado', 'label' => 'Estado', 'type' => 'select', 'options' => [
                ['value' => 'pagado', 'label' => 'Pagado'],
                ['value' => 'pendiente', 'label' => 'Pendiente']
            ], 'value' => $cuenta->estado],         
            ['name' => 'total', 'label' => 'Total', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->total]
        ]
    ])
    @endcomponent
@endsection