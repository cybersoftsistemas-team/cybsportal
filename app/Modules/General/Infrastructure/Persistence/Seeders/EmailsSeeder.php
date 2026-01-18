<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailsSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $root = RegisterCategoriesSeeder::saveIfNotExists('4F8A1A7E-DC1E-4BD8-B2CB-0E2DF4F8A9C1', 'Emails', null);
            if ($root) {
                RegisterCategoriesSeeder::saveIfNotExists('9E7C5DA2-54C1-49B3-91C5-51CA7BE8F24A', 'Email', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('F1BD5F43-86DD-4AC3-93D3-6C9AF1C7A82E', 'Email 2', $root->id());
                RegisterCategoriesSeeder::saveIfNotExists('A0F42F11-97AA-4BB2-BF4A-E4539960D715', 'Outro', $root->id());
            }
        });
    }
}
