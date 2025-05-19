<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function create()
    {
        return view('reservas');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'tipo_servicio' => 'required|string',
            'fecha_reserva' => 'required|date',
            'duracion' => 'required|integer|min:1',
            'metodo_pago' => 'required|string',
            'terminos' => 'accepted',
        ]);

     
        unset($validated['terminos']);

        Reserva::create($validated);

        return redirect()->route('reservas.create')->with('success', 'Reserva realizada con éxito.');
    }
}
