<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([

            ['src' => 'blog1.jpg'],
            ['src' => 'blog2.jpg'],
            ['src' => 'blog3.jpg'],
            ['src' => 'blog4.jpg'],
            ['src' => 'blog5.jpg'],
            ['src' => 'blog6.jpg'],
            ['src' => 'blog7.jpg'],
            ['src' => 'blog8.jpg'],
            ['src' => 'blog9.jpg'],
            ['src' => 'blog10.jpg'],
            ['src' => 'blog11.jpg'],

        ]);
    }
}
