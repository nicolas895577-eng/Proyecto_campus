@extends('layouts.app')

@section('title', 'Crear Reserva')

@section('content')
<h2>Crear Reserva</h2>
<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
   @include('reservas.partials.form')
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
