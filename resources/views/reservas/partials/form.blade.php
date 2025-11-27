<div class="space-y-6">
{{-- Campo Espacio --}}
<div>
<label for="espacio_id" class="block text-sm font-medium text-gray-700 mb-1">Espacio</label>
<select name="espacio_id" id="espacio_id"
class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md shadow-sm"
required>
<option value="">Seleccione un espacio</option>
@foreach($espacios as $espacio)
<option value="{{ $espacio->id }}"
{{ old('espacio_id', $reserva->espacio_id ?? '') == $espacio->id ? 'selected' : '' }}>
{{ $espacio->nombre }}
</option>
@endforeach
</select>
@error('espacio_id')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>


<div>
    <label for="solicitante" class="block text-sm font-medium text-gray-700 mb-1">Solicitante</label>
    <input type="text" 
           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
           id="solicitante" name="solicitante" 
           value="{{ old('solicitante', $reserva->solicitante ?? '') }}" required>
    @error('solicitante')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


<div>
    <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
    <input type="date" 
           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
           id="fecha" name="fecha" 
           value="{{ old('fecha', $reserva->fecha ?? '') }}" required>
    @error('fecha')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <div>
        <label for="hora_inicio" class="block text-sm font-medium text-gray-700 mb-1">Hora Inicio</label>
        <input type="time" 
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
               id="hora_inicio" name="hora_inicio" 
               value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}" required>
        @error('hora_inicio')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="hora_fin" class="block text-sm font-medium text-gray-700 mb-1">Hora Fin</label>
        <input type="time" 
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
               id="hora_fin" name="hora_fin" 
               value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}" required>
        @error('hora_fin')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>


<div>
    <label for="motivo" class="block text-sm font-medium text-gray-700 mb-1">Motivo</label>
    <textarea 
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
        id="motivo" name="motivo" rows="3">{{ old('motivo', $reserva->motivo ?? '') }}</textarea>
    @error('motivo')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


</div>



<div class="mt-8">
<button type="submit"
class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 border border-transparent rounded-lg shadow-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
Guardar
</button>
</div>