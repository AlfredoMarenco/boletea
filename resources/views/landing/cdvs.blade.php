@extends('layouts.template')
@section('title', 'Centros de venta')
{{-- @push('publish')
    <script>
        (function(s) {
            s.dataset.zone = '10079145', s.src = 'https://forfrogadiertor.com/tag.min.js'
        })([document.documentElement, document.body].filter(Boolean).pop().appendChild(document.createElement('script')))
    </script>
@endpush --}}

@section('content')
    <div class="py-8">
        <h1 class="text-3xl font-bold text-rojo text-center">Nuestros centros de venta</h1>
        @livewire('cdvs')
    </div>
@endsection
