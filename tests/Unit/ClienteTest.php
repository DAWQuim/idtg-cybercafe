<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_cliente()
    {
        $cliente = Cliente::factory()->create();

        $this->assertDatabaseHas('cliente', [
            'id_cliente' => $cliente->id_cliente,
            'nombre' => $cliente->nombre,
            'apellido' => $cliente->apellido,
            'email' => $cliente->email,
            'dni' => $cliente->dni,
            'telefono' => $cliente->telefono,
        ]);
    }

    /** @test */
    public function cliente_requires_mandatory_fields()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        // Create a Cliente without required fields to fail
        Cliente::create([]);
    }

    /** @test */
    public function can_update_cliente()
    {
        $cliente = Cliente::factory()->create();

        $newData = [
            'nombre' => 'UpdatedName',
            'apellido' => 'UpdatedSurname',
            'email' => 'updated@example.com',
            'dni' => '12345678Z',
            'telefono' => '999999999',
        ];

        $cliente->update($newData);

        $this->assertDatabaseHas('cliente', $newData + ['id_cliente' => $cliente->id_cliente]);
    }

    /** @test */
    public function can_delete_cliente()
    {
        $cliente = Cliente::factory()->create();

        $cliente->delete();

        $this->assertDatabaseMissing('cliente', ['id_cliente' => $cliente->id_cliente]);
    }

    /** @test */
    public function cliente_belongs_to_user()
    {
        $user = User::factory()->create();

        $cliente = Cliente::factory()->create([
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(User::class, $cliente->user);
        $this->assertEquals($user->id, $cliente->user->id);
    }
}
