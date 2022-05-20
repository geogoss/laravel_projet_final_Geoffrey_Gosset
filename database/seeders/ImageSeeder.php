<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            
            [
                'src' => 'user1.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user2.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user3.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user4.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user5.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user6.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user7.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'user8.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team1.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team2.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team3.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team4.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team5.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team6.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team7.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'team8.jpg',
                'bool' => false,
                'product_id' => null,
            ],
            [
                'src' => 'meuble1.jpg',
                'bool' => false,
                'product_id' => 1,
            ],
            [
                'src' => 'meuble2.jpg',
                'bool' => false,
                'product_id' => 2,
            ],
            [
                'src' => 'meuble3.jpg',
                'bool' => false,
                'product_id' => 3,
            ],
            [
                'src' => 'meuble4.jpg',
                'bool' => false,
                'product_id' => 4,
            ],
            [
                'src' => 'meuble5.jpg',
                'bool' => false,
                'product_id' => 5,
            ],
            [
                'src' => 'meuble6.jpg',
                'bool' => false,
                'product_id' => 6,
            ],
            [
                'src' => 'meuble7.jpg',
                'bool' => false,
                'product_id' => 7,
            ],
            [
                'src' => 'meuble8.jpg',
                'bool' => false,
                'product_id' => 7,
            ],
            
        ]);
    }
}
