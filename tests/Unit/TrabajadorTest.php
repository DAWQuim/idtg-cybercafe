<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Trabajador;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Area;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TrabajadorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_trabajador()
    {
        $trabajador = Trabajador::factory()->create();

        $this->assertDatabaseHas('trabajador', [
            'id_trabajador' => $trabajador->id_trabajador,
            'nombre' => $trabajador->nombre,
            'apellido' => $trabajador->apellido,
            'email' => $trabajador->email,
            'dni' => $trabajador->dni,
            'telefono' => $trabajador->telefono,
        ]);
    }

    /** @test */
    public function can_update_trabajador()
    {
        $trabajador = Trabajador::factory()->create();

        $newData = [
            'nombre' => 'Updated Name',
            'apellido' => 'Updated Lastname',
            'email' => 'updated@example.com',
            'dni' => '12345678Z',
            'telefono' => '987654321',
        ];

        $trabajador->update($newData);

        $this->assertDatabaseHas('trabajador', $newData + ['id_trabajador' => $trabajador->id_trabajador]);
    }

    /** @test */
    public function can_delete_trabajador()
    {
        $trabajador = Trabajador::factory()->create();

        $trabajador->delete();

        $this->assertDatabaseMissing('trabajador', ['id_trabajador' => $trabajador->id_trabajador]);
    }

    /** @test */
    public function trabajador_belongs_to_user()
    {
        $user = User::factory()->create();
        $trabajador = Trabajador::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $trabajador->user);
        $this->assertEquals($user->id, $trabajador->user->id);
    }

    /** @test */
    public function trabajador_has_many_clientes()
    {
        $trabajador = Trabajador::factory()->create();
        $clientes = Cliente::factory()->count(3)->create(['trabajador_id' => $trabajador->id_trabajador]);

        $this->assertCount(3, $trabajador->clientes);
        $this->assertInstanceOf(Cliente::class, $trabajador->clientes->first());
    }

    /** @test */
    public function trabajador_has_many_productos()
    {
        $trabajador = Trabajador::factory()->create();
        $productos = Producto::factory()->count(2)->create(['trabajador_id' => $trabajador->id_trabajador]);

        $this->assertCount(2, $trabajador->productos);
        $this->assertInstanceOf(Producto::class, $trabajador->productos->first());
    }

    /** @test */
    public function trabajador_belongs_to_area()
    {
        $area = Area::factory()->create();
        $trabajador = Trabajador::factory()->create(['area_id' => $area->id]);

        $this->assertInstanceOf(Area::class, $trabajador->area);
        $this->assertEquals($area->id, $trabajador->area->id);
    }
}
