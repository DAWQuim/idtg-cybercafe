<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    protected $model = Reserva::class;

    public function definition(): array
    {
        return [
            'usuario' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'tipo_servicio' => $this->faker->randomElement(['PC', 'PS5', 'XBOX', 'Café', 'Impresión']),
            'fecha_reserva' => $this->faker->dateTimeBetween('now', '+1 month'),
            'duracion' => $this->faker->numberBetween(1, 8), // en horas
            'metodo_pago' => $this->faker->randomElement(['Efectivo', 'Tarjeta', 'Bizum']),
            'terminos' => true,
        ];
    }
}
