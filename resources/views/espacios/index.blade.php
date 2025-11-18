@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Listado de Espacios</h1>

    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('espacios.create') }}" class="btn btn-primary mb-3">Crear Espacio</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($espacios as $espacio)
            <tr>
                <td>{{ $espacio->id }}</td>
                <td>{{ $espacio->nombre }}</td>
                <td>{{ $espacio->tipo }}</td>
                <td>{{ $espacio->capacidad }}</td>
                <td>{{ $espacio->ubicacion }}</td>

                <td>
                    <a href="{{ route('espacios.edit', $espacio) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este espacio?');">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{ $espacios->links() }}
</div>
@endsection
