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

        // insertar datos en la tabla permissions

        $this->call(PermissionsSeeder::class);

        // insertar datos en la tabla role

        $this->call(


        // insertar varios datos en la tabla users

        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2021-06-25 22:21:11',
                'updated_at' => '2021-06-25 23:57:13',
            ]
        ]);

        // insertar datos en la tabla role_has_permissions

        $this->call(Role_has_PermissionsSeeder::class);

        // // insertar datos en la tabla model_has_roles
        DB::table('model_has_roles')->insert([
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 1],
        ]);
    }
}
