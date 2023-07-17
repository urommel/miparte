<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // insertar datos en la tabla model_has_roles

        // DB::table('model_has_roles')->insert([
        //     'role_id' => 1,
        //     'model_type' => 'App\Models\User',
        //     'model_id' => 1,
        // ]);


        // DB::table('permissions')->insert([
        //     ['name' => 'ver-rol', 'guard_name' => 'web'],
        //     ['name' => 'crear-rol', 'guard_name' => 'web'],
        //     ['name' => 'editar-rol', 'guard_name' => 'web'],
        //     ['name' => 'borrar-rol', 'guard_name' => 'web'],

        //     ['name' => 'ver-usuario', 'guard_name' => 'web'],
        //     ['name' => 'crear-usuario', 'guard_name' => 'web'],
        //     ['name' => 'editar-usuario', 'guard_name' => 'web'],
        //     ['name' => 'borrar-usuario', 'guard_name' => 'web'],

        //     ['name' => 'ver-personal', 'guard_name' => 'web'],
        //     ['name' => 'crear-personal', 'guard_name' => 'web'],
        //     ['name' => 'editar-personal', 'guard_name' => 'web'],
        //     ['name' => 'borrar-personal', 'guard_name' => 'web']
        // ]);

        // insertar datos en la tabla role

        DB::table('roles')->insert([
            'name' => 'Administrador del Sistema',
            'guard_name' => 'web',
        ]);


        // insertar varios datos en la tabla users

        DB::table('users')->insert([
            [
                'name' => 'Amdinistrador',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2021-06-25 22:21:11',
                'updated_at' => '2021-06-25 23:57:13',
            ]
        ]);



        // insertar datos en la tabla role_has_permissions

        DB::table('role_has_permissions')->insert([
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
        ]);
    }
}
