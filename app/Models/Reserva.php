<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'usuario',
        'telefono',
        'tipo_servicio',
        'fecha_reserva',
        'duracion',
        'metodo_pago',
        'terminos',
    ];
}
