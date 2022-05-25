<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
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
            'subject' => $faker->realText($maxNBChars = 15),
            'content' => $faker->realText($maxNBChars = 200),
            'product_id' => $faker->numberBetween($min = 1, $max = 7),
            'foto_id' => $faker->numberBetween($min = 1, $max = 38)
        ];
    }
}
