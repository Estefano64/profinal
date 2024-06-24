@extends('layouts.inicio')

@section('content')
    <div class="container mx-auto py-8">
        @include('components.barraTop.contactInfo', ['phone' => '929-293-986', 'address' => 'Av. Aviacion 700, Cerro Colorado'])
    </div>
@endsection
