<?php
namespace Database\Seeders;

use App\Models\Table2;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Table2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard(); // Disable mass assignment protection during seeding

        for ($i = 0; $i < 100; $i++) {
            Table2::create([
                'name' => 'abc',
            ]);
        }

        Model::reguard(); // Re-enable mass assignment protection
    }
}
