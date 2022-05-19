<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'title' => 'Product List View',
                'image_id' => 71,
            ],
            [
                'title' => 'Blog',
                'image_id' => 72,
            ],
            [
                'title' => 'About Us',
                'image_id' => 73,
            ],
            [
                'title' => 'Contact Us',
                'image_id' => 74,
            ],
            [
                'title' => 'Single-Bloc',
                'image_id' => 75,
            ],
            [
                'title' => 'Single-Product',
                'image_id' => 76,
            ],
            [
                'title' => 'Shopping-Cart',
                'image_id' => 77,
            ],
            [
                'title' => 'Checkout',
                'image_id' => 78,
            ],
            [
                'title' => 'Order',
                'image_id' => 79,
            ],
            [
                'title' => 'Register',
                'image_id' => 80,
            ],
            [
                'title' => 'My Account',
                'image_id' => 81,
            ],

        ]);
    }
}
