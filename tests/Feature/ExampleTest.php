<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $value = "Hello, World";
        $response = $this->get('/coba')
                ->type('halo', 'Hello, World')
                ->pressAndWaitFor('halokirim', 1)
                ->assertInputValue('jawab', $value);
        // $response->assertStatus(200);
    }
}
