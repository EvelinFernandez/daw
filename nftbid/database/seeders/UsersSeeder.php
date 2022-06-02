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
            'name'=>'Administrador 1',
            'email'=>'admin1@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>6363337623,
            'alias'=>'admin',
            'image'=>'default.jpg'
        ]);
        DB::table('users')->insert([
            'name'=>'Pablo Lopez',
            'email'=>'palo@gmail.com',
            'password'=>Hash::make('321'),
            'phone'=>6361236789,
            'alias'=>'pablito',
            'image'=>'default.jpg'
        ]);

    }
}
