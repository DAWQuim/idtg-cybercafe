<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

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
