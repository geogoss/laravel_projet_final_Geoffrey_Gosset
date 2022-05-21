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
                'bool' => true,
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
                'product_id' => 8,
            ],
            
        ]);
    }
}
