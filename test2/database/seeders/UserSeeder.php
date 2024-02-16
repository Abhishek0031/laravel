<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user=new User;
        $user->name="abhishek";
        $user->email="abhishek3182002@gmail.com";
        $user->role="Admin";
        $user->password="12345678";
        // $user->image=$faker->imageUrl(400, 300);
        $user->save();
    }


    
}
