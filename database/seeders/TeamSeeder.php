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
                'src' => 'moi.jpg'
            ],
            [
                'name' => 'Bima',
                'firstname' => 'Alex',
                'age' => 29,
                'fonction' => 'RH',
                'src' => 'alexe.jpg'
            ],
            [
                'name' => 'Ninou',
                'firstname' => 'Alice',
                'age' => 30,
                'fonction' => 'RP',
                'src' => 'alice.jpg'
            ],
            [
                'name' => 'Bachi',
                'firstname' => 'Barbara',
                'age' => 53,
                'fonction' => 'Ninja',
                'src' => 'barbara.jpg'
            ],
            [
                'name' => 'boukaji',
                'firstname' => 'Benjamen',
                'age' => 36,
                'fonction' => 'IT',
                'src' => 'benja.jpg'
            ],
            [
                'name' => 'fuja',
                'firstname' => 'Magali',
                'age' => 26,
                'fonction' => 'IT',
                'src' => 'magali.jpg'
            ],
            [
                'name' => 'Nurico',
                'firstname' => 'Jenny',
                'age' => 31,
                'fonction' => 'Hotesse',
                'src' => 'Jenny.jpg'
            ],
            [
                'name' => 'bambin',
                'firstname' => 'Julie',
                'age' => 23,
                'fonction' => 'Directrice Market',
                'src' => 'julie.jpg'
            ],
            [
                'name' => 'Sangui',
                'firstname' => 'Mathieu',
                'age' => 25,
                'fonction' => 'Market Advisor',
                'src' => 'mathieu.jpg'
            ],
            [
                'name' => 'Nanni',
                'firstname' => 'victor',
                'age' => 50,
                'fonction' => 'Shell Market',
                'src' => 'victor.jpg'
            ],
            [
                'name' => 'Mourandi',
                'firstname' => 'Nadia',
                'age' => 42,
                'fonction' => 'Stock Advisor',
                'src' => 'nadia.jpg'
            ],
            [
                'name' => 'Stannislaw',
                'firstname' => 'Pierre',
                'age' => 35,
                'fonction' => 'Manager',
                'src' => 'pierre.jpg'
            ],
        ]);
    }
}
