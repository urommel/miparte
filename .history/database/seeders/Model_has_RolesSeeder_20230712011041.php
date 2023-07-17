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
            ['role_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 2],
            ['role_id' => 3, 'model_type' => 'App\Models\User', 'model_id' => 3],
            ['role_id' => 4, 'model_type' => 'App\Models\User', 'model_id' => 4],
            ['role_id' => 5, 'model_type' => 'App\Models\User', 'model_id' => 5],
            ['role_id' => 6, 'model_type' => 'App\Models\User', 'model_id' => 6],
            ['role_id' => 7, 'model_type' => 'App\Models\User', 'model_id' => 7],
            ['role_id' => 8, 'model_type' => 'App\Models\User', 'model_id' => 8],
            ['role_id' => 9, 'model_type' => 'App\Models\User', 'model_id' => 9],
            ['role_id' => 10, 'model_type' => 'App\Models\User', 'model_id' => 10],

        ]);
    }
}
