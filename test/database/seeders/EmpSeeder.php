<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emp;
class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Emps=collect(
            [
            [
                'name'=>"abhishek",
                'email'=>"abhishek@gmail.com"
            ],
            [
                'name'=>"sachin",
                'email'=>"sachin@gmail.com"
            ],
              [
                'name'=>"harvinder",
                'email'=>"harvinder@gmail.com"
              ]
            ]
            );
    //passing array
        // $Emps->each(function($val){
        //     Emp::insert($val);
        // });
//we are passing single value

        Emp::create([
            [
                'name'=>"harvinder",
                'email'=>"harvinder@gmail.com"
              ]
        ]);
    //we are passing value through the     
        // \App\Models\Emp::factory(5)->create();
    
}    
}

