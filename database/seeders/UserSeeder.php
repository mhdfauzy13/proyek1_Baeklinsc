<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@baeklin.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'mamay',
            'email' => 'mamay1212@gmail.com',
            'role' => 'user',
            'password' => bcrypt('baeklin211')
        ]);
    }
}
