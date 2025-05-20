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
            'puntuacion' => 'required|integer|min:0|max:10',
            'comentario' => 'nullable|string|max:1000',
        ]);
    
        Valoracion::create([
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
            'fecha' => now()->toDateString(),
        ]);
    
        return redirect()->back()->with('success', '¡Gracias por tu valoración!');
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
