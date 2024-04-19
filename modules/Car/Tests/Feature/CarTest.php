<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Car\Models\Car;
use Modules\Car\Tests\CarTestCase;

class CarTest extends CarTestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $car = Car::factory()->create();

        dd($car);
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
