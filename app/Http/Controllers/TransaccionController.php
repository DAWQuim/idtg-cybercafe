<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransaccionController extends Controller
{
    /**
     * Muestra una lista de transacciones.
     */
    public function index()
    {
        $transacciones = Transaccion::all();
        return view('transacciones.index', compact('transacciones'));
    }

    /**
     * Muestra el formulario para crear una nueva transacción.
     */
    public function create()
    {
        return view('transacciones.create');
    }

    /**
     * Guarda una nueva transacción en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|integer|exists:clientes,id',
            'detalles' => 'required|string|max:1000',
            'total' => 'required|integer|min:0',
        ]);

        Transaccion::create([
            'fecha' => Carbon::now()->toDateString(),
            'id_cliente' => $request->id_cliente,
            'detalles' => $request->detalles,
            'total' => $request->total,
        ]);

        return redirect()->route('transacciones.index')->with('success', 'Transacción registrada correctamente.');
    }

    /**
     * Muestra los detalles de una transacción específica.
     */
    public function show(Transaccion $transaccion)
    {
        return view('transacciones.show', compact('transaccion'));
    }

    /**
     * Muestra el formulario para editar una transacción.
     */
    public function edit(Transaccion $transaccion)
    {
        return view('transacciones.edit', compact('transaccion'));
    }

    /**
     * Actualiza una transacción existente.
     */
    public function update(Request $request, Transaccion $transaccion)
    {
        $request->validate([
            'detalles' => 'required|string|max:1000',
            'total' => 'required|integer|min:0',
        ]);

        $transaccion->update([
            'detalles' => $request->detalles,
            'total' => $request->total,
        ]);

        return redirect()->route('transacciones.index')->with('success', 'Transacción actualizada correctamente.');
    }

    /**
     * Elimina una transacción.
     */
    public function destroy(Transaccion $transaccion)
    {
        $transaccion->delete();
        return redirect()->route('transacciones.index')->with('success', 'Transacción eliminada correctamente.');
    }
}
