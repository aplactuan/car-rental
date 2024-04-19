<?php

namespace Modules\Car\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Car\Models\Car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Car\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
