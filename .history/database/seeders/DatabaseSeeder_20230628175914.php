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

        $role1 = Role::create(['name' => 'admin']); //adminstrator
        $role2 = Role::create(['name' => 'receptionist']); //recepcionista
        $role3 = Role::create(['name' => 'warehouse manager']); //almacenista
        $role4 = Role::create(['name' => 'waiter']); //mesero
        $role5 = Role::create(['name' => 'cook']); //cocinero



    }
}