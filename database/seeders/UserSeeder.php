<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Gosset',
                'phone' => '0479 123456',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin@admin.com'),
                'company' => 'Google',
                'address' => '39, avenue de Winston Churchil, 1180, Uccle',
                'avatar_id' => 1,
                'role_id' => 1,
                'country_id' => 7,
                'state_id' => 7,
                'city_id' => 7,
            ],
            [
                'name' => 'Bouvier',
                'phone' => '0496 987654',
                'email' => 'member@member.com',
                'password' => Hash::make('member@member.com'),
                'company' => 'Apple',
                'address' => '22, avenue de l\'Eclésiastique, 6000, Gosselie',
                'avatar_id' => 2,
                'role_id' => 4,
                'country_id' => 2,
                'state_id' => 2,
                'city_id' => 2,

            ],
        ]);
    }
}
