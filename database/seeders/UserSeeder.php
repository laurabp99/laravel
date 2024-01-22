<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [ 
            [
                "name"=> "Laura",
                "email"=> "laurabennasar99@gmail.com",
                "password" => "$2y$12\$YUwk5UlK7Wh12nM41wg.XOr9TGax.anQCBqTBVdSrpBesNGHCj8xK",
            ],
        ];
            
        foreach ($users as $user){
            User::create($user);
        }
    }
}
