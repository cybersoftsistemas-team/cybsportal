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

            app()->instance('seed.countryId', $country->id());
        });
    }
}
