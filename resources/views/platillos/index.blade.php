<!-- resources/views/mesas/index.blade.php -->


@extends('layouts.new')

@section('content')
    @component('components.gestion.index', [
        'title' => 'Listado de Platillos',
        'createRoute' => route('platillos.create'),
        'createButtonText' => 'Nuevo Platillo',
        'columns' => ['nombre' => 'Nombre', 'descripcion' => 'Descripción', 'precio' => 'Precio'],
        'data' => $platillos,
        'editRoute' => 'platillos.edit',
        'deleteRoute' => 'platillos.destroy',
        'idKey' => 'idPlatillo'
    ])
    @endcomponent
@endsection