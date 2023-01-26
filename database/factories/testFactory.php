<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'users_id' => $this->faker->phoneNumber(),
            // 'text' => $this->faker->name(),
        ];
    }
    // public function updateID($userID)
    // {
    //     return $this->state(function (array $attributes, $userID) {
    //         return [
    //             'users_id' => $userID,
    //         ];
    //     });
    // }
}
