@extends('layouts.app')

@section('title', 'Listado de Reservas')

@section('content')

<div class="flex justify-between items-center mb-6 border-b pb-4">
<h2 class="text-3xl font-bold text-gray-800">Listado de Reservas</h2>

<a href="{{ route('reservas.create') }}"
class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
+ Crear Reserva
</a>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow-md">
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-50">
<tr>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Espacio</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Solicitante</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Inicio</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fin</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Motivo</th>
<th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
@forelse($reservas as $reserva)
<tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $reserva->id }}</td>

<td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 font-semibold">{{ $reserva->espacio->nombre }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $reserva->solicitante }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $reserva->fecha }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $reserva->hora_inicio }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $reserva->hora_fin }}</td>
<td class="px-6 py-4 text-sm text-gray-500">{{ $reserva->motivo ?? '—' }}</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center space-x-2">
<a href="{{ route('reservas.edit', $reserva) }}"
class="text-indigo-600 hover:text-indigo-900 px-3 py-1 border border-indigo-600 rounded-md text-xs font-semibold hover:bg-indigo-50 transition">
Editar
</a>

                    <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="text-red-600 hover:text-red-900 px-3 py-1 border border-red-600 rounded-md text-xs font-semibold hover:bg-red-50 transition"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva? Esta acción es irreversible.')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="px-6 py-4 text-center text-gray-500">
                    No hay reservas registradas.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


</div>

<div class="mt-6">

{{ $reservas->links() }}
</div>
@endsection