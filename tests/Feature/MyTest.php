<?php

declare(strict_types = 1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $response = $this->get('/');
        $response->assertStatus(301);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->get('/reg');
        $response->assertStatus(200);

        $response = $this->get('/settings');
        $response->assertStatus(200);
    }

    public function test_db()
    {
        DB::connection()->getDatabaseName();

        $this->assertTrue(true);
    }
}
