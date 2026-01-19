<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            RegisterIdentitiesSeeder::saveUserIfNotExists(
                '3F6C8A4E-2B91-4E4E-9D43-6F0E1C8B9A10',
                'Administrador',
                'Conta interna para a administração de sistemas/domínios.',
                true,  // AccountBlockedOut (CAST(1 AS BIT))
                null,  // AccountExpiresDate
                true,  // Reserved (CAST(1 AS BIT))
                'd41d8cd98f00b204e9800998ecf8427e', // Password (hash)
                null   // PersonId
            );
        });
    }
}
