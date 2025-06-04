<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Valoracion;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ValoracionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_valoracion()
    {
        $producto = Producto::factory()->create();
        $user = User::factory()->create();

        $valoracion = Valoracion::create([
            'producto_id' => $producto->id,
            'user_id' => $user->id,
            'puntuacion' => 4,
            'fecha' => '2025-06-01',
            'comentario' => 'Buen servicio',
        ]);

        $this->assertDatabaseHas('valoracion', [
            'producto_id' => $producto->id,
            'user_id' => $user->id,
            'puntuacion' => 4,
            'comentario' => 'Buen servicio',
        ]);
    }


    /** @test */
    public function can_update_valoracion()
    {
        $valoracion = Valoracion::factory()->create();

        $valoracion->update([
            'puntuacion' => 5,
            'comentario' => 'Excelente',
        ]);

        $this->assertDatabaseHas('valoracion', [
            'id' => $valoracion->id,
            'puntuacion' => 5,
            'comentario' => 'Excelente',
        ]);
    }

    /** @test */
    public function can_delete_valoracion()
    {
        $valoracion = Valoracion::factory()->create();

        $valoracion->delete();

        $this->assertDatabaseMissing('valoracion', [
            'id_valoracion' => $valoracion->id_valoracion,
        ]);
    }

    /** @test */
    public function fecha_is_casted_to_date()
    {
        $valoracion = Valoracion::factory()->create([
            'fecha' => '2025-06-01',
        ]);

        $this->assertInstanceOf(Carbon::class, $valoracion->fecha);
        $this->assertEquals('2025-06-01', $valoracion->fecha->format('Y-m-d'));
    }
}
