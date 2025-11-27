<div class="space-y-6">
{{-- Campo Nombre --}}
<div>
<label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
<input type="text"
class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
id="nombre" name="nombre"
value="{{ old('nombre', $espacio->nombre ?? '') }}" required>
@error('nombre')
<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

{{-- Campo Tipo --}}
<div>
    <label for="tipo" class="block text-sm font-medium text-gray-700 mb-1">Tipo</label>
    <input type="text" 
           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
           id="tipo" name="tipo" 
           value="{{ old('tipo', $espacio->tipo ?? '') }}" required>
    @error('tipo')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Campo Capacidad --}}
<div>
    <label for="capacidad" class="block text-sm font-medium text-gray-700 mb-1">Capacidad</label>
    <input type="number" 
           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
           id="capacidad" name="capacidad" 
           value="{{ old('capacidad', $espacio->capacidad ?? '') }}" min="1" required>
    @error('capacidad')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Campo Ubicación --}}
<div>
    <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
    <input type="text" 
           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
           id="ubicacion" name="ubicacion" 
           value="{{ old('ubicacion', $espacio->ubicacion ?? '') }}" required>
    @error('ubicacion')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


</div>

{{-- Botón de Guardar --}}

<div class="mt-8">
<button type="submit"
class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 border border-transparent rounded-lg shadow-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
Guardar
</button>
</div>