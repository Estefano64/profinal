@extends('layouts.new')

@section('content')
    @component('components.gestion.showCuenta', [
        'title' => 'Listado de Cuentas',
        'columns' => [
            'idCuenta' => 'ID',
            'estado' => 'Estado',
            'subtotal' => 'Subtotal',
            'impuesto' => 'Impuesto',
            'total' => 'Total'
        ],
        'data' => $cuentas,
        'editRoute' => 'cuentas.edit',
        'deleteRoute' => 'cuentas.destroy',
        'idKey' => 'idCuenta'
    ])
    @endcomponent
    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $cuentas->links() }}
    </div>
@endsection