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
                'src' => 'team1.jpg'
            ],
            [
                'name' => 'Bima',
                'firstname' => 'Alex',
                'age' => 29,
                'fonction' => 'RH',
                'src' => 'team2.jpg'
            ],
            [
                'name' => 'Ninou',
                'firstname' => 'Alice',
                'age' => 30,
                'fonction' => 'RP',
                'src' => 'team3.jpg'
            ],
            [
                'name' => 'Bachi',
                'firstname' => 'Barbara',
                'age' => 53,
                'fonction' => 'Ninja',
                'src' => 'team4.jpg'
            ],
            [
                'name' => 'boukaji',
                'firstname' => 'Benjamen',
                'age' => 36,
                'fonction' => 'IT',
                'src' => 'team5.jpg'
            ],
            [
                'name' => 'fuja',
                'firstname' => 'Magali',
                'age' => 26,
                'fonction' => 'IT',
                'src' => 'team6.jpg'
            ],
            [
                'name' => 'Nurico',
                'firstname' => 'Jenny',
                'age' => 31,
                'fonction' => 'Hotesse',
                'src' => 'team7.jpg'
            ],
            [
                'name' => 'bambin',
                'firstname' => 'Julie',
                'age' => 23,
                'fonction' => 'Directrice Market',
                'src' => 'team8.jpg'
            ],
        ]);
    }
}
