<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos')->insert([

            ['src' => 'aicha.jpg'],
            ['src' => 'alexe.jpg'],
            ['src' => 'alice.jpg'],
            ['src' => 'barbara.jpg'],
            ['src' => 'benja.jpg'],
            ['src' => 'bernadette.jpg'],
            ['src' => 'bibou.jpg'],
            ['src' => 'bruno.jpg'],
            ['src' => 'cathy.jpg'],
            ['src' => 'charles.jpg'],
            ['src' => 'Didier.jpg'],
            ['src' => 'esteban.jpg'],
            ['src' => 'Farid.jpg'],
            ['src' => 'ines.jpg'],
            ['src' => 'jean.jpg'],
            ['src' => 'jef.jpg'],
            ['src' => 'Jenny.jpg'],
            ['src' => 'jimy.jpg'],
            ['src' => 'joelle.jpg'],
            ['src' => 'julie.jpg'],
            ['src' => 'kevin.jpg'],
            ['src' => 'kim.jpg'],
            ['src' => 'kimy.jpg'],
            ['src' => 'leila.jpg'],
            ['src' => 'magali.jpg'],
            ['src' => 'marc.jpg'],
            ['src' => 'margaux.jpg'],
            ['src' => 'mathieu.jpg'],
            ['src' => 'michele.jpg'],
            ['src' => 'moi.jpg'],
            ['src' => 'nadia.jpg'],
            ['src' => 'nathalie.jpg'],
            ['src' => 'pierre.jpg'],
            ['src' => 'sophie.jpg'],
            ['src' => 'steph.jpg'],
            ['src' => 'stephane.jpg'],
            ['src' => 'steve.jpg'],
            ['src' => 'tom.jpg'],
            ['src' => 'victor.jpg'],

        ]);
    }
}
