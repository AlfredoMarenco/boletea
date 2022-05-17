@extends('layouts.template')

@section('content')
    <div class="grid md:grid-cols-3 gap-6 items-center bg-white my-12 mx-4 md:mx-44 py-3 shadow-md" x-data="{ open: true }">
        @livewire('stream')
    </div>
    <div class="grid md:grid-cols-3 gap-6 items-center h-5 bg-white mb-4 mx-4 md:mx-44 shadow-md lg:hidden">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
                crossorigin="anonymous"></script>
        <!-- Anuncio 1 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5976709800052610" data-ad-slot="1210961234"
            data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
@endsection
