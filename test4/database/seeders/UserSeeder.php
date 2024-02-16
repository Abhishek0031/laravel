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
        $user->m_id='1';
        $user->name="raman";
        $user->email="abhi3182002@gmail.com";
        $user->role="admin";
        $user->password="12345678";
        $user->email_verified_at=now();
        $user->save();
    }
}
