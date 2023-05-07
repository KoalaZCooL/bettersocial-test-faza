<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * success test.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('/api/v1/register', ['username' => 'Sally']);

        $response->assertStatus(200);
    }

    /**
     * error by duplicated test.
     */
    public function test_the_application_returns_a_duplication_error_response(): void
    {
        $response = $this->post('/api/v1/register', ['username' => 'Sally']);

        $response->assertStatus(400);
    }

    /**
     * error by non-alphanumeric test.
     */
    public function test_the_application_returns_an_invalid_character_error_response(): void
    {
        $response = $this->post('/api/v1/register', ['username' => 'Sa!ly']);

        $response->assertStatus(400);
    }
}
