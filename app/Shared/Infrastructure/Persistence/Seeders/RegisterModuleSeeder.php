<?php

namespace App\Shared\Infrastructure\Persistence\Seeders;

use App\Modules\Address\Infrastructure\Persistence\Seeders\RegisterAddressesSeeder;
use App\Modules\Country\Infrastructure\Persistence\Seeders\RegisterCountriesSeeder;
use App\Modules\General\Infrastructure\Persistence\Seeders\RegisterCategoriesSeeder;
use App\Modules\Identity\Infrastructure\Persistence\Seeders\RegisterIdentitiesSeeder;
use Illuminate\Database\Seeder;

class RegisterModuleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegisterCategoriesSeeder::class,
            RegisterCountriesSeeder::class,
            RegisterAddressesSeeder::class,
            RegisterIdentitiesSeeder::class,
        ]);
    }
}
