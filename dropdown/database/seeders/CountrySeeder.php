<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $countries = [
            "United States",
            "Canada",
            "United Kingdom",
            "Australia",
            "India"
          ];
          foreach($countries as $data){
            Country::create([
            'country_name'=> $data,
            ]);
          }
    }
}
