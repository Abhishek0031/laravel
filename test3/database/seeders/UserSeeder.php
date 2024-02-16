<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User();
        $user->name="abhishek";
        $user->email="abhishek3182002@gmail.com";
        $user->role="admin";
        $user->password="12345678";
        $user->save();
    }
}
