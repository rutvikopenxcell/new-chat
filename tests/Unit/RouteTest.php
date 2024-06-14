<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_route(): void
    {
        $response = $this->get('/chat');
        $response->assertStatus(200);
    }
}
