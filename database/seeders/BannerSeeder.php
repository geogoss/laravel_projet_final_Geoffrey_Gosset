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
                'src' => 'banner1.jpg',
            ],
            [
                'title' => 'Blog',
                'src' => 'banner2.jpg',
            ],
            [
                'title' => 'About Us',
                'src' => 'banner3.jpg',
            ],
            [
                'title' => 'Contact Us',
                'src' => 'banner4.jpg',
            ],
            [
                'title' => 'Single-Bloc',
                'src' => 'banner5.jpg',
            ],
            [
                'title' => 'Single-Product',
                'src' => 'banner6.jpg',
            ],
            [
                'title' => 'Shopping-Cart',
                'src' => 'banner7.jpg',
            ],
            [
                'title' => 'Checkout',
                'src' => 'banner8.jpg',
            ],
            [
                'title' => 'Order',
                'src' => 'banner9.jpg',
            ],
            [
                'title' => 'Register',
                'src' => 'banner10.jpg',
            ],
            [
                'title' => 'My Account',
                'src' => 'banner11.jpg',
            ],

        ]);
    }
}
