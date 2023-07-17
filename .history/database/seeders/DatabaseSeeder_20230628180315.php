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

        // insertar datos en la tabla users


        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
        ]);

        // insertar datos en la tabla role

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            ['name' => 'ver-rol', 'guard_name' => 'web'],
            ['name' => 'crear-rol', 'guard_name' => 'web'],
            ['name' => 'editar-rol', 'guard_name' => 'web'],
            ['name' => 'borrar-rol', 'guard_name' => 'web'],
            ['name' => 'ver-usuario', 'guard_name' => 'web'],
            ['name' => 'crear-usuario', 'guard_name' => 'web'],
            ['name' => 'editar-usuario', 'guard_name' => 'web'],
            ['name' => 'borrar-usuario', 'guard_name' => 'web'],
        ]);


        // insertar datos en la tabla role_has_permissions
    

    }
}
