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
        User::create([
           'name'=>'abhishek',
           'email'=>'abhishek3182002@gmail.com',
           'role'=>'admin',
           'password'=>'12345678',
           'email_verified_at'=>now(),
        ]);
    }
}
