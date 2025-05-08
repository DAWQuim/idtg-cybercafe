<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthHomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_page_is_displayed_correctly(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('home');
    }
}
