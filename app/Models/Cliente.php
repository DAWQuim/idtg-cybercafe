<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'cliente';

    // Definir las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'contraseña',
        'dni',
        'telefono',
    ];

    // Si los nombres de las columnas son diferentes de la convención (por ejemplo, el campo 'id')
    protected $primaryKey = 'id_cliente';

    // Si el campo de la clave primaria no es un entero
    public $incrementing = true;

    // Si la tabla no tiene timestamps
    public $timestamps = false;

    public function valoraciones()
{
    return $this->hasMany(Valoracion::class, 'id_cliente', 'id_cliente');
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function productos()
{
    return $this->hasMany(Producto::class, 'cliente_id');
}

public function trabajador()
{
    return $this->belongsTo(Trabajador::class, 'trabajador_id');
}


}
