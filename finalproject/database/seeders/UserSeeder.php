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
        // $user=new User;
        // $user->create([
        //     $user->parent_id='a',
        //     $user->name='Admin kumar',
        //     $user->email='admin@gmail.com',
        //     $user->email_verified_at=now(),
        //     $user->password='12345678',
        //     $user->role_id='admin'
        //  ]);

         $user=new User();
            $user->parent_id='0';
            $user->name='Admin kumar';
            $user->email='admin@test.com';
            $user->email_verified_at=now();
            $user->password='12345678';
            $user->role_id='admin';
         $user->save();
    }
}
