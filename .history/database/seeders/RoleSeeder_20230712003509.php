<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('roles')->insert(
            [
            'name' => 'Admin del Sistema',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Jefe del Personal',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Personal',
            'guard_name' => 'web',
            ]
        );

    }
}