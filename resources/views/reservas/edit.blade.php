@extends('layouts.app')

@section('title', 'Editar Reserva')

@section('content')
<h2>Editar Reserva</h2>
<form action="{{ route('reservas.update', $reserva) }}" method="POST">
    @csrf
    @method('PUT')
    @include('reservas.form')
    <button type="submit" class="btn btn-warning">Actualizar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
