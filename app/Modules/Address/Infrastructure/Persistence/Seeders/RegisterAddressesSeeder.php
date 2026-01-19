<?php

namespace App\Modules\Address\Infrastructure\Persistence\Seeders;

use App\Modules\Address\Domain\Entities\State;
use App\Modules\Address\Domain\Entities\StateCode;
use App\Modules\Address\Infrastructure\Persistence\Repositories\StateCodeRepository;
use App\Modules\Address\Infrastructure\Persistence\Repositories\StateRepository;
use Illuminate\Database\Seeder;

class RegisterAddressesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(YourAddressSeederClass::class);
    }

    public static function saveStateCodeIfNotExists(
        string $ibge,
        string $iso2,
        string $iso3166_2,
        string $stateId,
    ): void
    {
        static::__saveStateCodeIfNotExists(
            codeType: 'IBGE',
            code: $ibge,
            stateId: $stateId,
        );

        static::__saveStateCodeIfNotExists(
            codeType: 'ISO2',
            code: $iso2,
            stateId: $stateId,
        );

        static::__saveStateCodeIfNotExists(
            codeType: 'ISO3166_2',
            code: $iso3166_2,
            stateId: $stateId,
        );
    }

    private static function __saveStateCodeIfNotExists(string $codeType, string $code, string $stateId): void
    {
        $entity = StateCode::create(
            codeType: $codeType,
            code: $code,
            stateId: $stateId,
        );

        StateCodeRepository::saveIfNotExists($entity);
    }

    public static function saveState(string $id, string $name, string $acronym, string $countryId): State
    {
        $entity = State::create(
            id: $id,
            name: $name,
            acronym: $acronym,
            countryId: $countryId,
        );

        StateRepository::save($entity);

        return $entity;
    }
}
