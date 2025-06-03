<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Transaccion;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class TransaccionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_transaccion()
    {
        $cliente = Cliente::factory()->create();
        $producto = Producto::factory()->create();
        $user = User::factory()->create();

        $transaccionData = [
            'fecha' => Carbon::now(),
            'id_cliente' => $cliente->id_cliente ?? $cliente->id, // según campo clave
            'id_producto' => $producto->id_producto,
            'user_id' => $user->id,
            'detalles' => 'Purchase details here',
            'total' => 199.99,
        ];

        $transaccion = Transaccion::create($transaccionData);

        $this->assertDatabaseHas('transaccion', [
            'id_transaccion' => $transaccion->id_transaccion,
            'detalles' => 'Purchase details here',
            'total' => 199.99,
        ]);
    }

    /** @test */
    public function can_update_transaccion()
    {
        $transaccion = Transaccion::factory()->create();

        $newData = [
            'detalles' => 'Updated details',
            'total' => 250.00,
        ];

        $transaccion->update($newData);

        $this->assertDatabaseHas('transaccion', $newData + ['id_transaccion' => $transaccion->id_transaccion]);
    }

    /** @test */
    public function can_delete_transaccion()
    {
        $transaccion = Transaccion::factory()->create();

        $transaccion->delete();

        $this->assertDatabaseMissing('transaccion', ['id_transaccion' => $transaccion->id_transaccion]);
    }

    /** @test */
    public function transaccion_belongs_to_cliente()
    {
        $cliente = Cliente::factory()->create();
        $transaccion = Transaccion::factory()->create(['id_cliente' => $cliente->id_cliente ?? $cliente->id]);

        $this->assertInstanceOf(Cliente::class, $transaccion->cliente);
        $this->assertEquals($cliente->id_cliente ?? $cliente->id, $transaccion->cliente->id_cliente ?? $transaccion->cliente->id);
    }

    /** @test */
    public function transaccion_belongs_to_producto()
    {
        $producto = Producto::factory()->create();
        $transaccion = Transaccion::factory()->create(['id_producto' => $producto->id_producto]);

        $this->assertInstanceOf(Producto::class, $transaccion->producto);
        $this->assertEquals($producto->id_producto, $transaccion->producto->id_producto);
    }

    /** @test */
    public function transaccion_belongs_to_user()
    {
        $user = User::factory()->create();
        $transaccion = Transaccion::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $transaccion->user);
        $this->assertEquals($user->id, $transaccion->user->id);
    }
}
