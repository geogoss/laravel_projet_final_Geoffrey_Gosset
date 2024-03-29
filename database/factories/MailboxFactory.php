<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mailbox>
 */
class MailboxFactory extends Factory
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
           'name' => $faker->name(),
           'email' => $faker->freeEmail(),
           'content' => $faker->realText($maxNBChars = 140) 
        ];
    }
}
