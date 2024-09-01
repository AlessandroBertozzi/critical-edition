<?php

namespace AlessandroBertozzi\CriticalEdition\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\CriticalEdition\Models\CriticalEdition;

class CriticalEditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = CriticalEdition::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->name(),
        ];
    }
}

