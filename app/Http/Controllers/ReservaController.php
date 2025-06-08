<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
	public function index()
{
    $reservas = Reserva::all();  // Traemos todas las reservas
    return view('reservas.index', compact('reservas'));
}

	
    public function create()
    {
        return view('reservas');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'tipo_servicio' => 'required|string',
        'fecha_reserva' => 'required|date',
        'duracion' => 'required|integer|min:1',
        'metodo_pago' => 'required|string',
        'terminos' => 'accepted',
    ]);

        unset($validated['terminos']);

        $reserva = new Reserva();
        $reserva->usuario = Auth::user()->username;
        $reserva->telefono = Auth::user()->phone;
        $reserva->fill($validated);
        $reserva->save();

        return redirect()->route('reservas.create')->with('success', 'Reserva realizada con éxito.');
    }

    public function destroy(string $id)
    {
        Reserva::destroy($id);

        return back();
    }
}
