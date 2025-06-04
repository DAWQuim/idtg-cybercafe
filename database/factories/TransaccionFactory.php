<?php

namespace Database\Factories;

use App\Models\Transaccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaccionFactory extends Factory
{
    protected $model = Transaccion::class;

    public function definition(): array
    {
        return [
            'fecha' => $this->faker->date(),
            'id_cliente' => \App\Models\Cliente::factory(),    
            'producto_id' => \App\Models\Producto::factory(),   // corregido aquí
            'user_id' => \App\Models\User::factory(),          
            'detalles' => $this->faker->sentence(6),
            'total' => $this->faker->numberBetween(10, 1000),
        ];
    }
}
