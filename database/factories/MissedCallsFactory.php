<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MissedCallsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'phoneNumber' => $this->faker->phoneNumber(),
                'firstName' => $this->faker->firstName(),
                'lastName' => $this->faker->lastName(),
                'region' => $this->faker->country()
        ];
    }
}
