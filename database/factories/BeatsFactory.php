<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;
use App\Models\User;
use App\Models\Beats;

class BeatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'image' => 'https://via.placeholder.com/300/09f/fff.png',
            'type' => "Classic Hip Hop",
            'price' => $this->faker->numberBetween(5, 15),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Beats $beats) {
            Comments::factory(1)->create([
                'beats_id' => $beats->id,
                'users_id' => 22,
                'comments' => $this->faker->realText(),
            ]);
        });
    }
}
