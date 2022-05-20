<?php

namespace Database\Seeders;

use App\Models\Detail;
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
            UserSeeder::class,
            TypeSeeder::class,
            SizeSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            CategorieSeeder::class,
            TeamSeeder::class,
            MailboxSeeder::class,
            ProductSeeder::class,
            BlogSeeder::class,
            ArticleSeeder::class,
            ImageSeeder::class,
            DetailSeeder::class,
            DiapoSeeder::class,
            BannerSeeder::class,

        ]);
    }
}
