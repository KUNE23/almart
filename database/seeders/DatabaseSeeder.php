<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Alfiansyah',
            'email' => 'nuansajunti8@gmail.com',
            'username' => 'kune',
            'password' => bcrypt('123'),
            'notelp' => '082295694326',
            'level' => 'Admin',
        ]);

        User::create([
            'nama' => 'Alfi',
            'email' => 'jok9854@gmail.com',
            'username' => 'kasir',
            'password' => bcrypt('123'),
            'notelp' => '081337546313',
            'level' => 'Kasir',
        ]);
    }
}
