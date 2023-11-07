<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the user data
        $userData = [
           
            [
                'name' => 'Halima',
                'email' => 'halima@example.com',
                'contact' => '1234543656',
                'password' => '12345', 
                // No need to hash the password
            ],
            // Add more user records as needed
        ];

        // Insert the user data into the "users" table
        DB::table('loginusers_')->insert($userData);
    }
    
}
