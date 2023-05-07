<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic success test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('/api/v1/register', ['username' => 'Sally']);

        $response->assertStatus(200);
    }

    /**
     * A basic test for error example.
     */
    public function test_the_application_returns_an_error_response(): void
    {
        $response = $this->post('/api/v1/register', ['username' => 'Sally']);

        $response->assertStatus(400);
    }
}
