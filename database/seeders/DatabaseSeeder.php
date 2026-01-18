<?php

namespace Database\Seeders;

use App\Shared\Infrastructure\Persistence\Seeders\RegisterModuleSeeder;
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
        $this->call(RegisterModuleSeeder::class);
    }
}
