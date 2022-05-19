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
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin@admin.com'),
                'avatar_id' => 1,
                'role_id' => 1
            ],
            [
                'name' => 'Bouvier',
                'email' => 'member@member.com',
                'password' => Hash::make('member@member.com'),
                'avatar_id' => 2,
                'role_id' => 4
            ],
        ]);
    }
}
