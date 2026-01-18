<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Seeders;

use App\Modules\Identity\Domain\Entities\Option;
use App\Modules\Identity\Domain\Entities\Setting;
use App\Modules\Identity\Domain\Entities\User;
use App\Modules\Identity\Infrastructure\Persistence\Repositories\OptionRepository;
use App\Modules\Identity\Infrastructure\Persistence\Repositories\SettingRepository;
use App\Modules\Identity\Infrastructure\Persistence\Repositories\UserRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RegisterIdentitiesSeeder extends Seeder
{
    private const ADMIN_USER_ID = '3F6C8A4E-2B91-4E4E-9D43-6F0E1C8B9A10';
    private const FORCE_CHANGE_PASSWORD_OPTION_ID = '5A6F0A6E-5C6A-4E71-9E6A-5C9E3F9A3A01';

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OptionsSeeder::class,
            UsersSeeder::class,
            SettingsSeeder::class,
        ]);
    }

    public static function getDefaultChecked(string $userId, string $optionId): bool
    {
        return $userId === self::ADMIN_USER_ID
            && $optionId === self::FORCE_CHANGE_PASSWORD_OPTION_ID;
    }

    public static function saveOptionIfNotExists(
        string $id,
        string $name,
        string $description
    ): void
    {
        $entity = Option::create(
            $id,
            $name,
            $description
        );

        OptionRepository::saveIfNotExists($entity);
    }

    public static function saveSettingIfNotExists(
        string $userId,
        string $optionId,
        bool $checked
    ): void
    {
        $entity = Setting::create(
            $userId,
            $optionId,
            $checked
        );

        SettingRepository::saveIfNotExists($entity);
    }

    public static function saveUserIfNotExists(
        string $id,
        string $name,
        string $description,
        bool $accountBlockedOut,
        ?Carbon $accountExpiresDate,
        bool $reserved,
        string $passwordHash,
        ?string $personId,
    ): void
    {
        $entity = User::create(
            $id,
            $name,
            $description,
            $accountBlockedOut,
            $accountExpiresDate,
            $reserved,
            $passwordHash,
            $personId
        );

        UserRepository::saveIfNotExists($entity);
    }
}
