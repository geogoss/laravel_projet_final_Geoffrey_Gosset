<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'title' => 'About Hurst',

                'content1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magn aliqua. Ut enim ad minim veniam, ommodo
                consequa. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                is be deserunt mollit anim id est laborum.',
                
                'content2' => 'Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium
                doloremque laudantium, totam remes aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo.',

                'content3' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos qui ratione voluptatem sequi nesciunt.',

                'src' => 'teamWork1.jpg',

                'address1' => '28 Green Tower, Street Name,',

                'address2' => 'New York City, USA',

                'phone' => '012345 - 123456789',

                'email' => 'hurst@gmail.com',
            ],
            [
                'title' => 'Yes We Can',

                'content1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magn aliqua. Ut enim ad minim veniam, ommodo
                consequa. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                is be deserunt mollit anim id est laborum.',
                
                'content2' => 'Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium
                doloremque laudantium, totam remes aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo.',

                'content3' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos qui ratione voluptatem sequi nesciunt.',

                'src' => 'teamWork2.jpg',

                'address1' => '10, place de la minoterie,',

                'address2' => 'Molenbeek, Belgium',

                'phone' => '012345 - 123456789',

                'email' => 'molengeek@gmail.com',
            ],
        ]);
    }
}
