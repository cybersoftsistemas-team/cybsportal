<?php

namespace App\Modules\Country\Infrastructure\Persistence\Seeders;

use App\Modules\Address\Infrastructure\Persistence\Seeders\BrazilStatesSeeder;
use App\Modules\Country\Domain\Entities\Country;
use App\Modules\Country\Domain\Entities\CountryCode;
use App\Modules\Country\Domain\Entities\Nationality;
use App\Modules\Country\Infrastructure\Persistence\Repositories\CountryCodeRepository;
use App\Modules\Country\Infrastructure\Persistence\Repositories\CountryRepository;
use App\Modules\Country\Infrastructure\Persistence\Repositories\NationalityRepository;
use App\Modules\Country\Infrastructure\Persistence\Seeders\BrazilCountrySeeder;
use Illuminate\Database\Seeder;

class RegisterCountriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrazilCountrySeeder::class,
            BrazilStatesSeeder::class,
        ]);
    }

    public static function saveCountryCodeIfNotExists(
        string $iso2,
        string $iso3,
        string $numeric,
        string $ibge,
        string $bacen,
        string $countryId,
    ): void
    {
        static::__saveCountryCodeIfNotExists(
            codeType: 'ISO2',
            code: $iso2,
            countryId: $countryId,
        );

        static::__saveCountryCodeIfNotExists(
            codeType: 'ISO3',
            code: $iso3,
            countryId: $countryId,
        );

        static::__saveCountryCodeIfNotExists(
            codeType: 'NUMERIC',
            code: $numeric,
            countryId: $countryId,
        );

        static::__saveCountryCodeIfNotExists(
            codeType: 'IBGE',
            code: $ibge,
            countryId: $countryId,
        );

        static::__saveCountryCodeIfNotExists(
            codeType: 'BACEN',
            code: $bacen,
            countryId: $countryId,
        );
    }

    private static function __saveCountryCodeIfNotExists(string $codeType, string $code, string $countryId): void
    {
        $entity = CountryCode::create(
            codeType: $codeType,
            code: $code,
            countryId: $countryId,
        );

        CountryCodeRepository::saveIfNotExists($entity);
    }

    public static function saveCountry(string $id, string $name, int $areaCode): Country
    {
        $entity = Country::create(
            id: $id,
            name: $name,
            areaCode: $areaCode,
        );

        CountryRepository::save($entity);

        return $entity;
    }

    public static function saveNationality(string $id, string $name, string $countryId): void
    {
        $entity = Nationality::create(
            id: $id,
            name: $name,
            countryId: $countryId,
        );

        NationalityRepository::save($entity);
    }
}
