<?php

namespace App\Modules\Country\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrazilNationalitySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Get Country ID
            $countryId = app('seed.countryId');

            // Nationality
            RegisterCountriesSeeder::saveNationality(
                       id: 'D1FB0359-322F-487C-8328-23853184902B',
                     name: 'Brasileiro',
                countryId: $countryId,
            );
        });
    }
}
