<?php

namespace App\Http\Controllers;

use App\Models\Valoracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ValoracionController extends Controller
{
    /**
     * Muestra una lista de valoraciones.
     */
    public function index()
    {
        $valoraciones = Valoracion::all();
        return view('valoraciones.index', compact('valoraciones'));
    }

    /**
     * Muestra el formulario para crear una nueva valoración.
     */
    public function create()
    {
        return view('valoraciones.create');
    }

    /**
     * Guarda una nueva valoración en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'puntuacion' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string|max:1000',
            'id_cliente' => 'required|integer|exists:clientes,id',
            'id_producto' => 'required|integer|exists:productos,id',
        ]);

        Valoracion::create([
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
            'fecha' => Carbon::now()->toDateString(),
            'id_cliente' => $request->id_cliente,
            'id_producto' => $request->id_producto,
            'user_id' => Auth::id(), // Solo si el usuario está autenticado
        ]);

        return redirect()->route('valoraciones.index')->with('success', 'Valoración guardada correctamente.');
    }

    /**
     * Muestra una valoración específica.
     */
    public function show(Valoracion $valoracion)
    {
        return view('valoraciones.show', compact('valoracion'));
    }

    /**
     * Muestra el formulario para editar una valoración existente.
     */
    public function edit(Valoracion $valoracion)
    {
        return view('valoraciones.edit', compact('valoracion'));
    }

    /**
     * Actualiza una valoración existente.
     */
    public function update(Request $request, Valoracion $valoracion)
    {
        $request->validate([
            'puntuacion' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string|max:1000',
        ]);

        $valoracion->update([
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
        ]);

        return redirect()->route('valoraciones.index')->with('success', 'Valoración actualizada correctamente.');
    }

    /**
     * Elimina una valoración.
     */
    public function destroy(Valoracion $valoracion)
    {
        $valoracion->delete();
        return redirect()->route('valoraciones.index')->with('success', 'Valoración eliminada correctamente.');
    }
}
