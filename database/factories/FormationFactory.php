<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'  =>$this->faker->realTextBetween(100, 120),
            'price'  => rand(300, 300),
            'image'  =>$this->faker->imageUrl(),
            'type_formation_id'  =>rand(1, 5),
            'description' => $this->faker->realTextBetween(300, 400),
            'created_at'  =>  now()
        ];
    }
}
