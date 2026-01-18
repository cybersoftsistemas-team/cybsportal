<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $root = RegisterCategoriesSeeder::saveIfNotExists('B5EB8F0C-6ED3-4C3E-9A99-9C6F0FDF4457', 'Telefones', null);
            if ($root) {
                RegisterCategoriesSeeder::saveIfNotExists('6E4EAA97-33EB-4B3A-9A7A-4F1AE13F7F90', 'Assistente', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('F711B8F4-0D22-4A14-8FB1-6B42DA2BC917', 'Celular', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('9F38A0D4-4E38-47A7-9E0A-64C94EAF8834', 'Celular 2', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('C1B25C46-83C3-4D93-8AE7-B2F4C50954F2', 'Comercial', $root->id());
            }
        });
    }
}
