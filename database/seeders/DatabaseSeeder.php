<?php

namespace Database\Seeders;

use Database\Seeders\DivisiSeeder;
use Database\Seeders\KendaraanDivisiSeeder;
use Database\Seeders\KendaraanSeeder;
use Database\Seeders\PengadaanSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DivisiSeeder::class,
            KendaraanSeeder::class,
            KendaraanDivisiSeeder::class,
            PengadaanSeeder::class,
            LisensiSeeder::class,
        ]);
    }
}
