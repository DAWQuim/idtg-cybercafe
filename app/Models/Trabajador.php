<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'trabajador';

    // Definir las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'dni',
        'telefono',
        'user_id',
    ];

    // Si la tabla no tiene timestamps
    public $timestamps = false;

    public function user()
{
    return $this->belongsTo(User::class);
}


public function clientes()
{
    return $this->hasMany(Cliente::class, 'trabajador_id');
}

public function productos()
{
    return $this->hasMany(Producto::class, 'trabajador_id');
}

public function area()
{
    return $this->belongsTo(Area::class, 'area_id', 'id_area'); 
}



}
