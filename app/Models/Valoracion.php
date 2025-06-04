<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    // Nombre de la tabla
    protected $table = 'valoracion';

    // Indicar si la clave primaria es autoincremental
    public $incrementing = true;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Laravel no usa timestamps por defecto en esta tabla
    public $timestamps = false;

    // Columnas asignables en masa
    protected $fillable = [
        'producto_id',
        'user_id',
        'puntuacion',
        'fecha',
        'comentario',
    ];
    
    

    // Cast para fechas
    protected $casts = [
        'fecha' => 'date',
    ];
}
