@extends('layouts.app')

@section('title', 'Listado de Espacios')

@section('content')


<div class="container mx-auto p-4">

{{-- Tarjeta Principal --}}
<div class="bg-white rounded-lg shadow-xl p-6">
    
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h2 class="text-3xl font-bold text-gray-800">Listado de Espacios</h2>
        
        <a href="{{ route('espacios.create') }}" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
            + Crear Espacio
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacidad</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubicación</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($espacios as $espacio)
                    <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $espacio->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $espacio->nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $espacio->tipo }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $espacio->capacidad }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $espacio->ubicacion }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center space-x-2">
                            <a href="{{ route('espacios.edit', $espacio) }}" 
                               class="text-indigo-600 hover:text-indigo-900 px-3 py-1 border border-indigo-600 rounded-md text-xs font-semibold hover:bg-indigo-50 transition">
                                Editar
                            </a>
    
                            <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-900 px-3 py-1 border border-red-600 rounded-md text-xs font-semibold hover:bg-red-50 transition"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este espacio? Esta acción es irreversible.')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                            No hay espacios registrados en el sistema.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="mt-6">
        {{ $espacios->links() }}
    </div>

</div>



</div>
@endsection