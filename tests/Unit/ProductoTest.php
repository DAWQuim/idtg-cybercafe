<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Producto;
use App\Models\Valoracion;
use App\Models\Transaccion;
use App\Models\Area;
use App\Models\Cliente;
use App\Models\Trabajador;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_producto()
    {
        $producto = Producto::factory()->create();

        $this->assertDatabaseHas('producto', [
            'id_producto' => $producto->id_producto,
            'nombre' => $producto->nombre,
            'descripcion' => $producto->descripcion,
            'precio' => $producto->precio,
        ]);
    }

    /** @test */
    public function producto_requires_mandatory_fields()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        // Attempt to create Producto without required fields to fail
        Producto::create([]);
    }

    /** @test */
    public function can_update_producto()
    {
        $producto = Producto::factory()->create();

        $newData = [
            'nombre' => 'Updated Product',
            'descripcion' => 'Updated description',
            'precio' => 99.99,
        ];

        $producto->update($newData);

        $this->assertDatabaseHas('producto', $newData + ['id_producto' => $producto->id_producto]);
    }

    /** @test */
    public function can_delete_producto()
    {
        $producto = Producto::factory()->create();

        $producto->delete();

        $this->assertDatabaseMissing('producto', ['id_producto' => $producto->id_producto]);
    }

    /** @test */
    public function producto_has_many_valoraciones()
    {
        $producto = Producto::factory()->create();

        $valoracion = Valoracion::factory()->create([
            'id_producto' => $producto->id_producto,
        ]);

        $this->assertTrue($producto->valoraciones->contains($valoracion));
    }

    /** @test */
    public function producto_has_many_transacciones()
    {
        $producto = Producto::factory()->create();

        $transaccion = Transaccion::factory()->create([
            'id_producto' => $producto->id_producto,
        ]);

        $this->assertTrue($producto->transacciones->contains($transaccion));
    }

    /** @test */
    public function producto_belongs_to_area()
    {
        $area = Area::factory()->create();

        $producto = Producto::factory()->create([
            'area_id' => $area->id_area,
        ]);

        $this->assertEquals($area->id_area, $producto->area->id_area);
    }

    /** @test */
    public function producto_belongs_to_cliente()
    {
        $cliente = Cliente::factory()->create();

        $producto = Producto::factory()->create([
            'cliente_id' => $cliente->id_cliente,
        ]);

        $this->assertEquals($cliente->id_cliente, $producto->cliente->id_cliente);
    }

    /** @test */
    public function producto_belongs_to_trabajador()
    {
        $trabajador = Trabajador::factory()->create();

        $producto = Producto::factory()->create([
            'trabajador_id' => $trabajador->id_trabajador,
        ]);

        $this->assertEquals($trabajador->id_trabajador, $producto->trabajador->id_trabajador);
    }
}
