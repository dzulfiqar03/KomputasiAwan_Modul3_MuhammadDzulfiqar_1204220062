<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullName' => 'admin',
            'userName' => 'admin',
            'email' => 'survveyadmin@gmail.com',
            'password' => Hash::make('survvey123'),
            'role' => 'admin',
            'original_filename' => null,
            'encrypted_filename' => null,
        ]);
    }
}
