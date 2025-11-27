<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Espacio;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('espacio')->paginate(10);
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $espacios = Espacio::all();
        return view('reservas.create', compact('espacios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'espacio_id'  => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha'       => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin'    => 'required|date_format:H:i',
            'motivo'      => 'nullable|string',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva creada correctamente.');
    }

    public function edit(Reserva $reserva)
    {
        $espacios = Espacio::all();
        return view('reservas.edit', compact('reserva', 'espacios'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([
            'espacio_id'  => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha'       => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin'    => 'required|date_format:H:i',
            'motivo'      => 'nullable|string',
        ]);

        $reserva->update($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva actualizada correctamente.');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva eliminada correctamente.');
    }
}
