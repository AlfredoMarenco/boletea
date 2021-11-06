@extends('layouts.template')

@section('content')
    <div class="py-8">
        <h1 class="text-3xl font-bold text-rojo text-center">Nuestros centros de venta</h1>
        @livewire('cdvs')
    </div>
@endsection
