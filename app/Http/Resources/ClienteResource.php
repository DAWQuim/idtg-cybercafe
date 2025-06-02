<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'dni' => $this->dni,
            'telefono' => $this->telefono,
            'user_id' => $this->user_id,
            'trabajador_id' => $this->trabajador_id,
            'valoraciones' => $this->whenLoaded('valoraciones'),
            'productos' => $this->whenLoaded('productos'),
        ];
    }
}
