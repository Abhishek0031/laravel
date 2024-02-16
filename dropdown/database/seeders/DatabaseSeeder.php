<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Table1;
use App\Models\Table2;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CountrySeeder::class
        ]); 
        
        $this->call([
            StateSeeder::class
        ]);

        $this->call([
            CitySeeder::class
        ]);
        $this->call([
            EmployeSeeder::class
        ]);
        $this->call([
            Table1::class
        ]);
        $this->call([
            Table2::class
        ]);

        
    }
}
