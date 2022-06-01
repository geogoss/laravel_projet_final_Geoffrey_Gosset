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
            'year' => $faker->year($max='now'),
            'month' => $faker->monthName($max = 'now'),
            'dayMonth' => $faker->dayOfMonth(),
            'dayWeek' => $faker->dayOfWeek(),
            'hour' => $faker->time($format = 'h:i', $max = 'now'),
            'pm' => $faker->amPm($max = 'now'),
            'author' => $faker->name(),
            'email' => $faker->freeEmail(),
            'content' => $faker->realText($maxNBChars = 250),
            'article_id' => $faker->numberBetween($min=1, $max=11),
            'foto_id' => $faker->numberBetween($min = 1, $max = 38),
            'user_id' => $faker->numberBetween($min = 1, $max = 2)
        ];
    }
}
