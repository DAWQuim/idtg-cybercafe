<?php

namespace Database\Factories;

use App\Models\Valoracion;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValoracionFactory extends Factory
{
    protected $model = Valoracion::class;

    public function definition(): array
    {
        return [
            'producto_id' => Producto::factory(),
            'user_id' => User::factory(),
            'puntuacion' => $this->faker->numberBetween(1, 5), // puntuación del 1 al 5
            'fecha' => $this->faker->date(),
            'comentario' => $this->faker->sentence(),
        ];
    }
}
