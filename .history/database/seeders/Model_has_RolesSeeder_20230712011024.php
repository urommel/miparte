<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Model_has_RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('model_has_roles')->insert([
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 1],
            
        ]);
    }
}
