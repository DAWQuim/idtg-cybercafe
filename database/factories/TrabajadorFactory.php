<?php

namespace Database\Factories;

use App\Models\Trabajador;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrabajadorFactory extends Factory
{
    protected $model = Trabajador::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'dni' => strtoupper($this->faker->bothify('########?')), // 8 números + letra
            'telefono' => $this->faker->phoneNumber(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
