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
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08123456789',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'bimo syahlendra',
            'email' => 'bimosyahlendra077@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '08994633394',
            'password' => bcrypt('P@55word'),
        ]);
    }
}
