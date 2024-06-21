<!-- resources/views/mesas/index.blade.php -->


@extends('layouts.new')

@section('content')
    @component('components.gestion.index', [
        'title' => 'Listado de Mesas',
        'createRoute' => route('mesas.create'),
        'createButtonText' => 'Nueva Mesa',
        'columns' => ['numero' => 'Número', 'capacidad' => 'Capacidad', 'estado' => 'Estado'],
        'data' => $mesas,
        'editRoute' => 'mesas.edit',
        'deleteRoute' => 'mesas.destroy',
        'idKey' => 'numero'
    ])
    @endcomponent
@endsection
