<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'name' => 'Hang',
                'src' => 'pokemon0.jpg'
            ],
            [
                'name' => 'Souf',
                'src' => 'pokemon1.jpg'
            ],
            [
                'name' => 'Mignon',
                'src' => 'pokemon2.jpg'
            ],
            [
                'name' => 'Naruto',
                'src' => 'pokemon3.jpg'
            ],
            [
                'name' => 'Sasuke',
                'src' => 'pokemon4.jpg'
            ],
        ]);
    }
}
