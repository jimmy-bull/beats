<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
// use App\Models\test;
use App\Models\Beats;
// use Database\Factories\testFactory;
use App\Models\Comments;
use Database\Factories\BeatsFactory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    // public function configure()
    // {
    //     return $this->afterCreating(function () {
    //         Beats::factory(1)->create();
    //         return Beats::factory(1)->afterCreating(function (User $user, Beats $beats) {
    //             Comments::factory(1)->create([
    //                 'beats_id' => $beats->id,
    //                 'users_id' => $user->id,
    //                 'comments' => $this->faker->realText(),
    //             ]);
    //         });
    //     });
    // }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
