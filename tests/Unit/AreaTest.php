<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Area;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AreaTest extends TestCase
{
    use RefreshDatabase;  // Refresh database for each test

    /** @test */
    public function can_create_area()
    {
        $area = Area::factory()->create();

        $this->assertDatabaseHas('area', [
            'id_area' => $area->id_area,
            'precio_hora' => $area->precio_hora,
            'sitios_libres' => $area->sitios_libres,
            'sitios_totales' => $area->sitios_totales,
        ]);
    }

    /** @test */
    public function can_read_area()
    {
        $area = Area::factory()->create();

        $areaFromDb = Area::find($area->id_area);
        $this->assertNotNull($areaFromDb);
        $this->assertEquals($area->precio_hora, $areaFromDb->precio_hora);
    }

    /** @test */
    public function can_update_area()
    {
        $area = Area::factory()->create();

        $newData = [
            'precio_hora' => 999,
            'sitios_libres' => 5,
            'sitios_totales' => 10,
        ];

        $area->update($newData);

        $this->assertDatabaseHas('area', $newData + ['id_area' => $area->id_area]);
    }

    /** @test */
    public function can_delete_area()
    {
        $area = Area::factory()->create();

        $area->delete();

        $this->assertDatabaseMissing('area', ['id_area' => $area->id_area]);
    }
}
