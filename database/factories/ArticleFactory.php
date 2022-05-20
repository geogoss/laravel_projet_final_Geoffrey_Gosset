<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
            'title' => $faker->realText($maxNBChars = 10),
            'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'content' => $faker->realText($maxNBChars = 200),
            'categorie_id' => $faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
