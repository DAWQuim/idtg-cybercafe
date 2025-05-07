<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthProfileControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_profile_page_is_displayed_for_authenticated_user(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertViewIs('profile.edit');
    }

    /**
     * Verifica que un usuario no autenticado no puede acceder a la página de perfil.
     */
    public function test_profile_page_is_not_accessible_for_guests(): void
    {
        $response = $this->get('/profile');

        $response->assertRedirect('/login');
    }
}
