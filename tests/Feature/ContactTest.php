<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Models\ContactMessage;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_contact_form_requires_all_fields(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    public function test_contact_form_rejects_invalid_email(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'not-an-email',
            'message' => 'Hola mundo',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_contact_form_submits_successfully(): void
    {
        // Si se guarda en base de datos
        $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'Este es un mensaje de prueba.',
        ])->assertRedirect('/contact') 
          ->assertSessionHas('success'); 

        // Comprueba que se guardó en la base de datos
        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'Este es un mensaje de prueba.',
        ]);
    }
}
