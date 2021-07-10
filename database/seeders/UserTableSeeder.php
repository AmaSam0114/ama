<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => '$2y$10$aUSQv4v3wTM5v9q.fF8Nm.wTwUBuXxr0H00kAnGJ/TCvGhVcj7iVi',
            'role' => 'manager'
        ]);
        \App\Models\User::create([
            'name' => 'Karman Perera',
            'email' => 'karman@gmail.com',
            'password' => '$2y$10$aUSQv4v3wTM5v9q.fF8Nm.wTwUBuXxr0H00kAnGJ/TCvGhVcj7iVi',
            'role' => 'supervisor'
        ]);
        \App\Models\User::create([
            'name' => 'Jagath Rohana',
            'email' => 'jagath@gmail.com',
            'password' => '$2y$10$aUSQv4v3wTM5v9q.fF8Nm.wTwUBuXxr0H00kAnGJ/TCvGhVcj7iVi',
            'role' => 'janitor'
        ]);
        \App\Models\User::create([
            'name' => 'Sithara Perera',
            'email' => 'sithara@gmail.com',
            'password' => '$2y$10$aUSQv4v3wTM5v9q.fF8Nm.wTwUBuXxr0H00kAnGJ/TCvGhVcj7iVi',
            'role' => 'client'
        ]);
    }
}
