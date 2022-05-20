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
            ['src' => 'user1.jpg'],
            ['src' => 'user2.jpg'],
            ['src' => 'user3.jpg'],
            ['src' => 'user4.jpg'],
            ['src' => 'user5.jpg'],
            ['src' => 'user6.jpg'],
            ['src' => 'user7.jpg'],
            ['src' => 'user8.jpg'],
        ]);
    }
}
