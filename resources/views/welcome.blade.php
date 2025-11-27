@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-4 text-primary">Bienvenido al Sistema de Reservaciones</h1>
    <p class="lead">Administra tus espacios y reservas de manera fácil y rápida.</p>

    <div class="mt-4">
        <a href="{{ route('espacios.index') }}" class="btn btn-primary btn-lg mx-2">Ver Espacios</a>
        <a href="{{ route('reservas.index') }}" class="btn btn-success btn-lg mx-2">Ver Reservas</a>
    </div>
</div>
@endsection
