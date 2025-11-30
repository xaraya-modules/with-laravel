<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->json('GET', '/webhook/hello-laravel', ['name' => 'world']);

        $response->assertStatus(200);

        $output = $response->getContent();
        $data = json_decode($output, true);
        $expected = 'world';
        $this->assertSame($expected, $data['hello']);
    }
}
