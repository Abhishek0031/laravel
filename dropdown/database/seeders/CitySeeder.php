<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $city = [
            [
                ["Los Angeles", "San Francisco", "San Diego", "Sacramento", "San Jose"],
                ["New York City", "Buffalo", "Rochester", "Syracuse", "Albany"],
                ["Houston", "Dallas", "Austin", "San Antonio", "El Paso"],
                ["Miami", "Orlando", "Tampa", "Jacksonville", "Fort Lauderdale"],
                ["Chicago", "Springfield", "Champaign", "Peoria", "Rockford"]
            ],
            [
                ["Toronto", "Ottawa", "Mississauga", "Hamilton", "London"],
                ["Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil"],
                ["Vancouver", "Surrey", "Burnaby", "Richmond", "Kelowna"],
                ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "Medicine Hat"],
                ["Winnipeg", "Brandon", "Thompson", "Portage la Prairie", "Steinbach"]
            ],
            [
                ["London", "Manchester", "Birmingham", "Leeds", "Liverpool"],
                ["Edinburgh", "Glasgow", "Aberdeen", "Dundee", "Inverness"],
                ["Cardiff", "Swansea", "Newport", "Wrexham", "Bangor"],
                ["Belfast", "Londonderry", "Newry", "Armagh", "Enniskillen"],
                ["London", "Birmingham", "Leeds", "Sheffield", "Manchester"]
            ],
            [
                ["Sydney", "Melbourne", "Brisbane", "Perth", "Adelaide"],
                ["Melbourne", "Sydney", "Brisbane", "Perth", "Adelaide"],
                ["Brisbane", "Gold Coast", "Sunshine Coast", "Cairns", "Toowoomba"],
                ["Perth", "Fremantle", "Mandurah", "Albany", "Geraldton"],
                ["Adelaide", "Mount Gambier", "Whyalla", "Murray Bridge", "Port Lincoln"]
            ],
            [
                ["Chandigarh", "Gurgaon", "Yamuna Nagar", "Panipat", "Hisar"],
                ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad"],
                ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem"],
                ["Bangalore", "Mysore", "Hubli", "Mangalore", "Belgaum"],
                ["Lucknow", "Kanpur", "Varanasi", "Agra", "Allahabad"]
            ]
        ];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                foreach ($city[$j][$i] as $cityName) {
                    City::create([
                        'city_name' => $cityName,
                        'state_id' => $j + 1,
                        'ctry_id' => $i + 1,

                    ]);
                }
            }
        }
    }
}
