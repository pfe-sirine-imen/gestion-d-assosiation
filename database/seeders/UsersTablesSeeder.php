<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Hash;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'nour',
            'email'=> 'nour@gmail.com',
            'password'=> Hash::make('password')
        ]);
    }
}
