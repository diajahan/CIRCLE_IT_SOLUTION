<?php

namespace Database\Seeders;

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

            'name'=> 'admin',
            'email'=> 'demo@gmail.com',
            'phone'=> '01840253009',
            'role_as'=> 'admin',
            'password'=>Hash::make('555555')

        ]);
    }
}
