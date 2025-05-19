<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Sanctum\HasApiTokens;

class User extends AuthUser
{
    use HasFactory, Notifiable, HasApiTokens;

    // Definir la tabla asociada al modelo
    protected $table = 'users';

    // Definir las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'dni',
        'birthdate',
        'postal_code',
        'phone',
    ];

    // Si los nombres de las columnas son diferentes de la convención (por ejemplo, el campo 'id')
    protected $primaryKey = 'id';

    // Si el campo de la clave primaria no es un entero
    public $incrementing = true;

    // Relación de los timestamps
    public $timestamps = true;

    // Ocultar las propiedades sensibles como el password y remember_token
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Especificar el tipo de fecha para las columnas de fechas
    protected $dates = [
        'email_verified_at',
        'birthdate',
        'created_at',
        'updated_at',
    ];

    // Accesor para obtener el nombre completo
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class, 'id_cliente');
    }
    
    public function cliente()
{
    return $this->hasOne(Cliente::class, 'user_id');
}
    public function trabajador()
{
    return $this->hasOne(Trabajador::class, 'user_id');
}

public function valoraciones()
{
    return $this->hasMany(Valoracion::class, 'user_id');
}


    
}
