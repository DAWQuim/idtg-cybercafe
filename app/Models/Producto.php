<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'producto';

    // Definir las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'descripcion',
        'nombre',
        'precio',
    ];

    // Si los nombres de las columnas son diferentes de la convención (por ejemplo, el campo 'id')
    protected $primaryKey = 'id_producto';

    // Si el campo de la clave primaria no es un entero
    public $incrementing = true;

    // Si la tabla no tiene timestamps
    public $timestamps = false;

    public function valoraciones(){
    return $this->hasMany(Valoracion::class, 'id_producto', 'id_producto');
    }
    
    public function transacciones()
{
    return $this->hasMany(Transaccion::class, 'id_producto');
}

public function area()
{
    return $this->belongsTo(Area::class, 'area_id');
}


public function cliente()
{
    return $this->belongsTo(Cliente::class, 'cliente_id');
}

public function trabajador()
{
    return $this->belongsTo(Trabajador::class, 'trabajador_id');
}


}
