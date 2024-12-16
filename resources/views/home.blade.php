@extends('layouts.app')
@section('title', 'Laravel 11')

@push('css')
    <style>
        body{
            background: #f3f3f3;
        }
    </style>
@endpush
@section('content')
<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert type='info' class="mb-4">
            <x-slot name='title'>
                Título de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <x-alert2 type='danger' class="mb-4">
            <x-slot name='title'>
                Título de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <h1>Bienvenido a la pagina principal</h1>
    </div>
</body>
@endsection
