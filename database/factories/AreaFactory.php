<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_area' => $this->faker->unique()->numberBetween(1, 9999), // ya que no es autoincremental
            'precio_hora' => $this->faker->randomFloat(2, 1, 10), // entre 1€ y 10€
            'sitios_libres' => $this->faker->numberBetween(0, 20),
            'sitios_totales' => 20, // puedes hacer que todos tengan 20, o random
        ];
    }
}
