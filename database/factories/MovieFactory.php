<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Interstellar', 'Rambo', 'Lucy', 'Predestination']),
            'director' => $this->faker->text($maxNbChars = 20),
            'image_url' => $this->faker->url(),
            'duration' => $this->faker->numberBetween(30, 180),
            'release_date' => $this->faker->date(),
            'genre' => $this->faker->randomElement(['horror', 'comedy', 'action', 'thriller']),
        ];
    }
}
