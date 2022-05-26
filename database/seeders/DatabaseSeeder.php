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
            InfoSeeder::class,
            RoleSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            TypeSeeder::class,
            SizeSeeder::class,
            CategorieSeeder::class,
            TeamSeeder::class,
            MailboxSeeder::class,
            ProductSeeder::class,
            FotoSeeder::class,
            NoteSeeder::class,
            BlogSeeder::class,
            ArticleSeeder::class,
            TagSeeder::class,
            CommentSeeder::class,
            ImageSeeder::class,
            DetailSeeder::class,
            DiapoSeeder::class,
            BannerSeeder::class,
            ArticleTagSeeder::class,

        ]);
    }
}
