<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Insert the user data into the "users" table
        DB::table('loginusers_')->insert([
            'name' => 'IESA',
            'email' => 'iesa@gmail.com',
            'contact' => '1234543656',
            'password' =>Hash::make('12345') ,
            'admin' => 1
        ]);
    }
    
}
