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
            // 'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'year' => $faker->year($max='now'),
            'month' => $faker->monthName($max = 'now'),
            'dayMonth' => $faker->dayOfMonth(),
            'dayWeek' => $faker->dayOfWeek(),
            'content1' => $faker->realText($maxNBChars = 450),
            'content2' => $faker->realText($maxNBChars = 750),
            'categorie_id' => $faker->numberBetween($min = 1, $max = 3),
            'user_id' => $faker->numberBetween($min = 1, $max = 2),
            'blog_id' => $faker->numberBetween($min = 1, $max = 11),
        ];
    }
}
