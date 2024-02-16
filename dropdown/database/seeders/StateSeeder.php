<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $states = [
            ["California", "New York", "Texas", "Florida", "Illinois"],
            ["Ontario", "Quebec", "British Columbia", "Alberta", "Manitoba"],
            ["England", "Scotland", "Wales", "Northern Ireland", "London"],
            ["New South Wales", "Victoria", "Queensland", "Western Australia", "South Australia"],
            ["Haryana", "Maharashtra", "Tamil Nadu", "Karnataka", "Uttar Pradesh"]
        ];

        for ($i = 0; $i < count($states); $i++) {
            foreach ($states[$i] as $state) {
                State::create([
                    'state_name' => $state,
                    'ctr_id' => $i + 1,
                ]);
            }
        }
    }
}
