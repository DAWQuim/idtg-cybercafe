<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Resources\ClienteResource;

class ClienteController extends Controller
{
    public function index()
    {
        return ClienteResource::collection(Cliente::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email|unique:cliente,email',
            'contraseña' => 'required|string|min:6',
            'dni' => 'required|string|max:20|unique:cliente,dni',
            'telefono' => 'nullable|string|max:20',
            'user_id' => 'nullable|exists:users,id',
            'trabajador_id' => 'nullable|exists:trabajador,id_trabajador',
        ]);

        // Puedes encriptar la contraseña si la usas para login
        // $data['contraseña'] = bcrypt($data['contraseña']);

        $cliente = Cliente::create($data);
        return new ClienteResource($cliente);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return new ClienteResource($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate([
            'nombre' => 'sometimes|required|string|max:100',
            'apellido' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|email|unique:cliente,email,' . $id . ',id_cliente',
            'contraseña' => 'sometimes|required|string|min:6',
            'dni' => 'sometimes|required|string|max:20|unique:cliente,dni,' . $id . ',id_cliente',
            'telefono' => 'nullable|string|max:20',
            'user_id' => 'nullable|exists:users,id',
            'trabajador_id' => 'nullable|exists:trabajador,id_trabajador',
        ]);

        $cliente->update($data);
        return new ClienteResource($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return response()->json(null, 204);
    }
}
