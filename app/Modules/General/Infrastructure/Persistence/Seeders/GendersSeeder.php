<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $root = RegisterCategoriesSeeder::saveIfNotExists('6A1D9EBC-25E9-4F39-B9C5-8D8766A2F4C7', 'Sexo', null);
            if ($root) {
                RegisterCategoriesSeeder::saveIfNotExists('C8E3A9FF-AB0C-4BBA-9EF8-3E209CCA4C98', 'Femenino', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('0CFAF5E2-96A0-40E3-81E5-52EA3B4576F1', 'Masculino', $root->id());
            }
        });
    }
}
