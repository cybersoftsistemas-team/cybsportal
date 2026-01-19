<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $root = RegisterCategoriesSeeder::saveIfNotExists('E3A2C0C9-42B8-4F6D-B6E7-5E5FE0F3C2A1', 'Tipos de Empresa', null);
            if ($root) {
                RegisterCategoriesSeeder::saveIfNotExists('A9F04E2C-3B6F-43D4-9518-88D53A4D6B22', 'Pública', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('1F7A53B9-9BFB-4A17-8F0C-10A2D5330C11', 'Privada', $root->id());
            }
        });
    }
}
