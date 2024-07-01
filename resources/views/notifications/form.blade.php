@extends('layouts.new')

@section('content')
@component('components.gestion.createAv', [
    'resource' => 'Notificación',
    'action' => route('notifications.send'),
    'method' => 'POST',
    'buttonText' => 'Enviar Notificación',
    'fields' => [
        [
            'name' => 'recipient_type', 
            'label' => 'Tipo de Destinatario', 
            'type' => 'select', 
            'options' => [
                ['value' => 'Todos', 'label' => 'Todos'],
                ['value' => 'Mozo', 'label' => 'Mozo'],
                ['value' => 'Encargado', 'label' => 'Encargado'],
                ['value' => 'Cajero', 'label' => 'Cajero']
            ]
        ],
        ['name' => 'subject', 'label' => 'Asunto', 'type' => 'text'],
        ['name' => 'message', 'label' => 'Mensaje', 'type' => 'textarea']
    ]
])
@endcomponent
@endsection
