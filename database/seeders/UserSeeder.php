<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@system.com',
            'password' => Hash::make('admin12345..'),
        ]);

        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'Editor',
            'lastname' => 'Editor',
            'email' => 'editor@system.com',
            'password' => Hash::make('editor12345..'),
        ]);

        $editor->assignRole('editor');
    }
}
