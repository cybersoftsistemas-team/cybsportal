<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use App\Modules\General\Domain\Entities\Category;
use App\Modules\General\Infrastructure\Persistence\Repositories\CategoryRepository;
use App\Modules\General\Infrastructure\Persistence\Seeders\AddressesSeeder;
use App\Modules\General\Infrastructure\Persistence\Seeders\EmailsSeeder;
use App\Shared\Infrastructure\Persistence\DbContexts\SaveResult;
use Illuminate\Database\Seeder;

class RegisterCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            EmailsSeeder::class,
            AddressesSeeder::class,
            PhonesSeeder::class,
            BusinessTypesSeeder::class,
            GendersSeeder::class,
        ]);
    }

    public static function saveIfNotExists(string $id, string $name, ?string $parentId): ?Category
    {
        $entity = Category::create(
            $id,
            $name,
            $parentId,
            true,
        );

        $saveResult = CategoryRepository::saveIfNotExists($entity);

        return $saveResult === SaveResult::CREATED ? $entity : null;
    }
}
