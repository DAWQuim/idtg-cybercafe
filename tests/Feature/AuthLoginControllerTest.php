<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthLoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A Test login
     *
     * @return void
     */
    public function test_login_displays_the_login_form()
    {
        //objectiu
        $response = $this->get(route('login'));
        //comprovació
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_user_can_login_with_correct_credentials(){
    $user = User::factory()->create([
        'password' => bcrypt('secret123'),
    ]);

    $response = $this->post('/login', [
        'username' => $user->username,
        'password' => 'secret123',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect('/home'); // o la ruta de redirección
    }

}
