<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = DB::table('users')->count();
        return [
            'heading' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(3),
            'Deadline' => $this->faker->dateTimeThisMonth(),
            'user_id' => rand(1, $user),
        ];
    }
}
