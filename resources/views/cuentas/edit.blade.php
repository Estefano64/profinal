@extends('layouts.new')

@section('content')
    @component('components.gestion.editAv', [
        'resource' => 'Cuenta',
        'action' => route('cuentas.update', $cuenta),
        'method' => 'PUT',
        'buttonText' => 'Actualizar Cuenta',
        'fields' => [
            ['name' => 'idCuentaCliente', 'label' => 'Cliente', 'type' => 'select', 
            'options' => $cuentaClientes->map(function($cuentaClientes) {
                    return [
                        'value' => $cuentaClientes->idCuentaCliente,
                        'label' => $cuentaClientes->nombre . ' - ' . $cuentaClientes->dni
                    ];
                })->toArray()
            ],
            ['name' => 'idMetodoPago', 'label' => 'Método de Pago', 'type' => 'select',
            'options' => $metodosPago->map(function($metodosPago) {
                    return [
                        'value' => $metodosPago->idMetodoPago,
                        'label' => $metodosPago->nombreMetodo
                    ];
                })->toArray()
            ],
            ['name' => 'estado', 'label' => 'Estado', 'type' => 'select', 'options' => [
                ['value' => 'pagado', 'label' => 'Pagado'],
                ['value' => 'pendiente', 'label' => 'Pendiente']
            ], 'value' => $cuenta->estado],    
            ['name' => 'subtotal', 'label' => 'Subtotal', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->subtotal, 'readonly' => true],   
            ['name' => 'impuesto', 'label' => 'Impuesto', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->impuesto, 'readonly' => true],  
            ['name' => 'total', 'label' => 'Total', 'type' => 'number', 'step' => '0.01', 'value' => $cuenta->total, 'readonly' => true]
        ]
    ])
    @endcomponent

    @component('components.gestion.filterpedidos', [
        'title' => 'Listado de Pedidos',
        'columns' => [           
            'usuario_name' => 'Usuario',
            'tipo' => 'Tipo',
            'platillo_name' => 'Platillo',
            'cantidad' => 'Cantidad',
            'platillo_precio' => 'Precio',
            'total' => 'Total'
        ],
        'data' => $pedidos,
        'idKey' => 'idPedido'
    ])
    @endcomponent
        
    <form action="{{ route('cuentas.generarBoleta', $cuenta->idCuenta) }}" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Generar Boleta</button>
    </form>
@endsection


