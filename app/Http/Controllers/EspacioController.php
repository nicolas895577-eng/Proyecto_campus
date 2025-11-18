<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Espacio;
use Illuminate\Http\Request;

class EspacioController extends Controller
{
    public function index()
    {
        $espacios = Espacio::paginate(10);
        return view('espacios.index', compact('espacios'));
    }

    public function create()
    {
        return view('espacios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'tipo'      => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'ubicacion' => 'required|string|max:255',
        ]);

        Espacio::create($request->only('nombre', 'tipo', 'capacidad', 'ubicacion'));

        return redirect()->route('espacios.index')
            ->with('success', 'Espacio creado correctamente.');
    }

    public function edit(Espacio $espacio)
    {
        return view('espacios.edit', compact('espacio'));
    }

    public function update(Request $request, Espacio $espacio)
    {
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'tipo'      => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'ubicacion' => 'required|string|max:255',
        ]);

        $espacio->update($request->only('nombre', 'tipo', 'capacidad', 'ubicacion'));

        return redirect()->route('espacios.index')
            ->with('success', 'Espacio actualizado correctamente.');
    }

    public function destroy(Espacio $espacio)
    {
        $espacio->delete();

        return redirect()->route('espacios.index')
            ->with('success', 'Espacio eliminado correctamente.');
    }
}
