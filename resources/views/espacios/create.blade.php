@extends('layouts.app')

@section('title', 'Crear Nuevo Espacio')

@section('content')

<h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-4">Crear Nuevo Espacio</h2>

<form action="{{ route('espacios.store') }}" method="POST" class="space-y-6">
@csrf


@include('espacios.partials.form')


</form>

<div class="mt-8">
<a href="{{ route('espacios.index') }}"
class="inline-flex items-center text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
&larr; Volver al Listado
</a>
</div>
@endsection