<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'valoracion';

    // Clave primaria personalizada
    protected $primaryKey = 'id_valoracion';

    // Indicar si la clave primaria es autoincremental
    public $incrementing = true;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Laravel no usa timestamps por defecto en esta tabla
    public $timestamps = false;

    // Columnas asignables en masa
    protected $fillable = [
        'puntuacion',
        'fecha',
        'comentario',
    ];

    // Cast para fechas
    protected $casts = [
        'fecha' => 'date',
    ];
}
