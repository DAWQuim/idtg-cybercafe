<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'area';

    // Definir las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'precio_hora',
        'sitios_libres',
        'sitios_totales',
    ];

    // Si los nombres de las columnas son diferentes de la convención (por ejemplo, el campo 'id')
    protected $primaryKey = 'id_area';

    
    public $incrementing = true;
    protected $keyType = 'int';

    // Si la tabla no tiene timestamps
    public $timestamps = false;
    public function productos()
{
    return $this->hasMany(Producto::class, 'area_id');
}
public function trabajadores()
{
    return $this->hasMany(Trabajador::class, 'area_id');
}

}
