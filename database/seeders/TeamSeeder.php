<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Washington',
                'firstname' => 'Denzel',
                'age' => 28,
                'fonction' => 'The Big Boss',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team2.jpg',
                'foto_id' => 29,
            ],
            [
                'name' => 'Bima',
                'firstname' => 'Alex',
                'age' => 29,
                'fonction' => 'RH',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team1.jpg',
                'foto_id' => 4,
            ],
            [
                'name' => 'Ninou',
                'firstname' => 'Alice',
                'age' => 30,
                'fonction' => 'RP',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team3.jpg',
                'foto_id' => 5,
            ],
            [
                'name' => 'Bachi',
                'firstname' => 'Barbara',
                'age' => 53,
                'fonction' => 'Ninja',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team4.jpg',
                'foto_id' => 6,
            ],
            [
                'name' => 'boukaji',
                'firstname' => 'Benjamen',
                'age' => 36,
                'fonction' => 'IT',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team5.jpg',
                'foto_id' => 7,
            ],
            [
                'name' => 'fuja',
                'firstname' => 'Magali',
                'age' => 26,
                'fonction' => 'IT',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team6.jpg',
                'foto_id' => 8,
            ],
            [
                'name' => 'Nurico',
                'firstname' => 'Jenny',
                'age' => 31,
                'fonction' => 'Hotesse',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team7.jpg',
                'foto_id' => 9,
            ],
            [
                'name' => 'bambin',
                'firstname' => 'Julie',
                'age' => 23,
                'fonction' => 'Directrice Market',
                'content' => 'There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.',
                'src' => 'team8.jpg',
                'foto_id' => 10,
            ],
        ]);
    }
}
