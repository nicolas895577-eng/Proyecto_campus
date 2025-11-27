@extends('layouts.app')

@section('title', 'Editar Espacio')

@section('content')
<h2>Editar Espacio</h2>
<form action="{{ route('espacios.update', $espacio) }}" method="POST">
    @csrf
    @method('PUT')
    @include('espacios.form')
    <button type="submit" class="btn btn-warning">Actualizar</button>
    <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
