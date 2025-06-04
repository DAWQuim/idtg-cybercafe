<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // correcto: nombre real de la tabla

    protected $fillable = [
        'descripcion',
        'nombre',
        'precio',
        'area_id',
        'cliente_id',
        'trabajador_id',
    ];

    public $timestamps = false;

    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class, 'producto_id');
    }

    public function transacciones()
    {
        return $this->hasMany(Transaccion::class, 'producto_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id_area');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id_cliente');
    }

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }
}
