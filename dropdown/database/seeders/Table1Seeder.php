<?php
namespace Database\Seeders;

use App\Models\Table1;
use Illuminate\Database\Seeder;

class Table1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Table1::create([
                'name' => 'abc',
                // You can add other fields and their values here
            ]);
        }
    }
}
