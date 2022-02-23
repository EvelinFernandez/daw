<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrator 1',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('123'),
            'phone'=>'6361260506',
            'alias'=>'admin',
            'img'=>'default.jpg',
        ]);
        DB::table('users')->insert([
            'name'=>'Juan Patricio Garza Morales',
            'email'=>'juan800@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'6361264556',
            'alias'=>'admin',
            'img'=>'default.jpg',
        ]);
    }
}
