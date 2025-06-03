<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Reserva;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_reserva()
    {
        $reserva = Reserva::factory()->create();

        $this->assertDatabaseHas('reservas', [
            'id' => $reserva->id,
            'usuario' => $reserva->usuario,
            'telefono' => $reserva->telefono,
            'tipo_servicio' => $reserva->tipo_servicio,
            'fecha_reserva' => $reserva->fecha_reserva,
            'duracion' => $reserva->duracion,
            'metodo_pago' => $reserva->metodo_pago,
            'terminos' => $reserva->terminos,
        ]);
    }

    /** @test */
    public function reserva_requires_mandatory_fields()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        // Try to create Reserva without mandatory fields
        Reserva::create([]);
    }

    /** @test */
    public function can_update_reserva()
    {
        $reserva = Reserva::factory()->create();

        $newData = [
            'usuario' => 'Updated User',
            'telefono' => '1234567890',
            'tipo_servicio' => 'Updated Service',
            'fecha_reserva' => now()->addDay()->toDateString(),
            'duracion' => 120,
            'metodo_pago' => 'Updated Payment Method',
            'terminos' => true,
        ];

        $reserva->update($newData);

        $this->assertDatabaseHas('reservas', $newData + ['id' => $reserva->id]);
    }

    /** @test */
    public function can_delete_reserva()
    {
        $reserva = Reserva::factory()->create();

        $reserva->delete();

        $this->assertDatabaseMissing('reservas', ['id' => $reserva->id]);
    }

    /** @test */
    public function fecha_reserva_is_a_valid_date()
    {
        $reserva = Reserva::factory()->make([
            'fecha_reserva' => 'invalid-date',
        ]);

        $this->assertFalse($this->isValidDate($reserva->fecha_reserva));
    }

    /** @test */
    public function terminos_must_be_boolean()
    {
        $reserva = Reserva::factory()->make([
            'terminos' => 'yes',
        ]);

        $this->assertIsBool($reserva->terminos);
    }

    private function isValidDate($date)
    {
        return (bool) strtotime($date);
    }
}
