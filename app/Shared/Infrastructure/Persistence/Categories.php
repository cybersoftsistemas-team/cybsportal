<?php

namespace App\Shared\Infrastructure\Persistence;

use App\Modules\General\Domain\Entities\CategoryEntity;

final class Categories
{
    public static function create(string $id, string $name, ?string $parentId, bool $reserved = false): CategoryEntity
    {
        $entity = CategoryEntity::create(
            $id,
            $name,
            $parentId,
            $reserved
        );

        return $entity;
    }
}