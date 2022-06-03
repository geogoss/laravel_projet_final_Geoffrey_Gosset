<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billings')->insert([

            [
                'name' => 'Gosset',
                'phone' => '0479 123456',
                'email' => 'google@google.com',
                'company' => 'Google',
                'address' => 'New York la plus belle ville',
                'country_id' => 5,
                'state_id' => 5,
                'city_id' => 5,
            ],
            [
                'name' => 'Bouvier',
                'phone' => '0496 987654',
                'email' => 'apple@apple.com',
                'company' => 'Apple',
                'address' => 'Londres j\'adore',
                'country_id' => 6,
                'state_id' => 6,
                'city_id' => 6,

            ],
            [
                'name' => 'Remy',
                'phone' => '0485 987654',
                'email' => 'vete@vete.com',
                'company' => 'vete',
                'address' => 'Venise j\'adore',
                'country_id' => 5,
                'state_id' => 5,
                'city_id' => 5,

            ],
            [
                'name' => 'Gate',
                'phone' => '0499 999654',
                'email' => 'microsoft@microsoft.com',
                'company' => 'Microsoft',
                'address' => 'New York j\'adore',
                'country_id' => 4,
                'state_id' => 4,
                'city_id' => 4,

            ],

        ]);
    }
}
