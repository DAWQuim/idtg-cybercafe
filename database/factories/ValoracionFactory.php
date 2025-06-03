<?php

namespace Database\Factories;

use App\Models\Valoracion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValoracionFactory extends Factory
{
    protected $model = Valoracion::class;

    public function definition(): array
    {
        return [
            'puntuacion' => $this->faker->numberBetween(1, 5), // puntuación del 1 al 5
            'fecha' => $this->faker->date(),
            'comentario' => $this->faker->sentence(),
            // 'id_cliente', 'id_producto' y 'user_id' los asignarás en el test o factory con relaciones
        ];
    }
}
