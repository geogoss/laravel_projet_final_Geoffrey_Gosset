<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = $this->faker;
        return [
            'author' => $faker->name(),
            'email' => $faker->freeEmail(),
            'content' => $faker->realText($maxNBChars = 150),
            'article_id' => $faker->numberBetween($min=1, $max=11)
        ];
    }
}
