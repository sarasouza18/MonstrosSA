<?php

namespace Database\Factories;

use App\Models\Door;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoorFactory extends Factory
{
    protected $model = Door::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word . ' Door',
            'location' => $this->faker->randomElement([
                'North Wing', 
                'South Wing', 
                'East Wing', 
                'West Wing',
                'Basement',
                'Roof'
            ]),
            'is_locked' => $this->faker->boolean(20),
            'description' => $this->faker->sentence,
        ];
    }
}