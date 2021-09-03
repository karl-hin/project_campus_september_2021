<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTestDB extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'jean'
        ]);
    }
}