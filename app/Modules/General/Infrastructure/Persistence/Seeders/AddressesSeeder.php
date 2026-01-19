<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $root = RegisterCategoriesSeeder::saveIfNotExists('9C4A9BCB-2E8B-4E2D-9B61-7B0C2C3B2E44', 'Endereço', null);
            if ($root) {
                RegisterCategoriesSeeder::saveIfNotExists('2A1A3C4D-8EFA-41C4-9F72-3B77A6D2D1C5', 'Comercial', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('7E2F6BD1-1F73-4DA3-9248-81B2B278D9A6', 'Residencial', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('B54E0D9F-1881-4C23-8396-2EF71C4499FB', 'Outro', $root->id());
            }
        });
    }
}
