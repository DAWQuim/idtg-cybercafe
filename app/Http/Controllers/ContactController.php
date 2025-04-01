<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Aquí puedes manejar el envío del mensaje, por ejemplo, guardarlo en la base de datos o enviarlo por correo
        return back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
    }
}
