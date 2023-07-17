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

        // insertar datos en la tabla permissions

//         (1, 'ver-rol', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (2, 'crear-rol', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (3, 'editar-rol', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (4, 'borrar-rol', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (5, 'ver-usuario', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (6, 'crear-usuario', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (7, 'editar-usuario', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54'),
// (8, 'borrar-usuario', 'web', '2023-06-25 23:37:54', '2023-06-25 23:37:54');



    }
}
