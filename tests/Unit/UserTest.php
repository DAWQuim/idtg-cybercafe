<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Transaccion;
use App\Models\Cliente;
use App\Models\Trabajador;
use App\Models\Valoracion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_user()
    {
        $userData = [
            'username' => 'johndoe',
            'email' => 'john@example.com',
            'password' => Hash::make('secret123'),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'dni' => '12345678X',
            'birthdate' => '1990-05-15',
            'postal_code' => '28001',
            'phone' => '123456789',
        ];

        $user = User::create($userData);

        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
            'username' => 'johndoe',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'dni' => '12345678X',
        ]);
    }

    /** @test */
    public function can_update_user()
    {
        $user = User::factory()->create();

        $user->update([
            'phone' => '987654321',
            'postal_code' => '08002',
        ]);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'phone' => '987654321',
            'postal_code' => '08002',
        ]);
    }

    /** @test */
    public function can_delete_user()
    {
        $user = User::factory()->create();

        $user->delete();

        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }

    /** @test */
    public function can_get_full_name_attribute()
    {
        $user = User::factory()->create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
        ]);

        $this->assertEquals('Jane Smith', $user->full_name);
    }

    /** @test */
    public function user_has_many_transacciones()
    {
        $user = User::factory()->create();

        $transaccion = Transaccion::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->transacciones->contains($transaccion));
    }

    /** @test */
    public function user_has_one_cliente()
    {
        $user = User::factory()->create();

        $cliente = Cliente::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(Cliente::class, $user->cliente);
        $this->assertEquals($cliente->id, $user->cliente->id);
    }

    /** @test */
    public function user_has_one_trabajador()
    {
        $user = User::factory()->create();

        $trabajador = Trabajador::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(Trabajador::class, $user->trabajador);
        $this->assertEquals($trabajador->id_trabajador, $user->trabajador->id_trabajador);
    }

    /** @test */
    public function user_has_many_valoraciones()
    {
        $user = User::factory()->create();

        $valoracion = Valoracion::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->valoraciones->contains($valoracion));
    }
}
