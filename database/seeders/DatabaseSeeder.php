<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            AvatarSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            SizeSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            CategorieSeeder::class,
            ImageSeeder::class,
            UserSeeder::class


        ]);
    }
}
