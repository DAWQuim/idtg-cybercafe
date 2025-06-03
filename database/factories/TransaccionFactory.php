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
            'id_cliente' => \App\Models\Cliente::factory(),    // Crear cliente relacionado o asignar ID existente
            'id_producto' => \App\Models\Producto::factory(),  // Crear producto relacionado o asignar ID existente
            'user_id' => \App\Models\User::factory(),          // Crear usuario relacionado o asignar ID existente
            'detalles' => $this->faker->sentence(6),
            'total' => $this->faker->numberBetween(10, 1000),
        ];
    }
}
