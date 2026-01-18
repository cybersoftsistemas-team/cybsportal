<?php

namespace App\Modules\Country\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrazilCountryCodeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Get Country ID
            $countryId = app('seed.countryId');

            // Country Codes
            RegisterCountriesSeeder::saveCountryCodeIfNotExists(
                     iso2: 'BR',
                     iso3: 'BRA',
                  numeric: '076',
                     ibge: '1058',
                    bacen: '076',
                countryId: $countryId,
            );
        });
    }
}
