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
        User::updateOrCreate(
            ['email' => 'umum@brksyariah.co.id'],
            [
                'name' => 'Bagian Umum',
                'username' => 'umum',
                'password' => Hash::make('12345678')
            ]
        );
    }
}
