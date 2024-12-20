<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->name(),
            'url' => fake()->url(),
            'url' => fake()->randomLetter(),
            'tags' => fake()->randomLetter(),
            'isFavourite' => fake()->boolean(),
            'isPrivate' => fake()->boolean(),
        ];
    }
}
