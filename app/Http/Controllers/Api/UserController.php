<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username'     => 'required|string|unique:users,username',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|string|min:6',
            'first_name'   => 'required|string',
            'last_name'    => 'required|string',
            'dni'          => 'required|string|unique:users,dni',
            'birthdate'    => 'required|date',
            'postal_code'  => 'required|string',
            'phone'        => 'required|string',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return response()->json($user, 201);
    }

    // Mostrar un solo usuario
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['message' => 'Usuario no encontrado'], 404);

        return response()->json($user);
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['message' => 'Usuario no encontrado'], 404);

        $validated = $request->validate([
            'username'     => ['sometimes', 'string', Rule::unique('users')->ignore($user->id)],
            'email'        => ['sometimes', 'email', Rule::unique('users')->ignore($user->id)],
            'password'     => 'sometimes|string|min:6',
            'first_name'   => 'sometimes|string',
            'last_name'    => 'sometimes|string',
            'dni'          => ['sometimes', 'string', Rule::unique('users')->ignore($user->id)],
            'birthdate'    => 'sometimes|date',
            'postal_code'  => 'sometimes|string',
            'phone'        => 'sometimes|string',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json($user);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['message' => 'Usuario no encontrado'], 404);

        $user->delete();

        return response()->json(['message' => 'Usuario eliminado']);
    }
}
