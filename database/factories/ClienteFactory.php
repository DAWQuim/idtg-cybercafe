<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contraseña' => Hash::make('password'), // contraseña segura por defecto
            'dni' => $this->faker->unique()->regexify('[0-9]{8}[A-Z]'),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
