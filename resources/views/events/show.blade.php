@extends('layouts.template2')

@section('title', $event->name)

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">

    <!-- Imagen destacada -->
    <div class="rounded-xl overflow-hidden shadow-lg mb-8">
        <img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-full h-80 object-cover">
    </div>

    <!-- Info general -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-6">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-[#ed2d7c] mb-2">{{ $event->name }}</h1>
            <p class="text-gray-600 text-lg">
                {{
