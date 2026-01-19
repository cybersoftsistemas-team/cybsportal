<?php

namespace App\Modules\Country\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrazilCountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Brasil
            $country = RegisterCountriesSeeder::saveCountry(
                      id: '42187260-79CE-4FA5-8020-FDD732A00A9B',
                    name: 'Brasil',
                areaCode: 55,
            );

            // Nationality
            RegisterCountriesSeeder::saveNationality(
                       id: 'D1FB0359-322F-487C-8328-23853184902B',
                     name: 'Brasileiro',
                countryId: $country->id(),
            );

            // Country Codes
            RegisterCountriesSeeder::saveCountryCodeIfNotExists(
                     iso2: 'BR',
                     iso3: 'BRA',
                  numeric: '076',
                     ibge: '1058',
                    bacen: '076',
                countryId: $country->id(),
            );

            app()->instance('seed.countryId', $country->id());
        });
    }
}
