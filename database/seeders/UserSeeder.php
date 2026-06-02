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
        $users = [
            [
                'name' => 'Bagian Umum',
                'username' => 'umum',
                'email' => 'umum@brksyariah.co.id',
                'role' => 'umum',
            ],
            [
                'name' => 'Bagian Pengadaan',
                'username' => 'pengadaan',
                'email' => 'pengadaan@brksyariah.co.id',
                'role' => 'pengadaan',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'password' => Hash::make('12345678'),
                    'role' => $user['role'],
                ]
            );
        }
    }
}
