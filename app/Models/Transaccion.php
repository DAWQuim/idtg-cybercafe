<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaccion extends Model
{
    use HasFactory;

    protected $table = 'transaccion';
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'id_cliente',
        'producto_id', // corregido
        'user_id',
        'detalles',
        'total',
    ];
    
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    

    // Relación con Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relación con Usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
