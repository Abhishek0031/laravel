<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;    
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table=new Role;
        $roles=['admin','subadmin','manager','staff'];
        // foreach($roles as $role){
            for($i=0;$i<4;++$i){
          $table->create([
             $table->role=$roles[$i],
          ]);
        }
    }
}
