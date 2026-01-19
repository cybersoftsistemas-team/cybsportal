<?php

namespace App\Shared\Domain\Repositories;

use App\Shared\Domain\Entities\Entity;
use App\Shared\Infrastructure\Persistence\DbContexts\SaveResult;

interface IRepository
{
    public static function save(Entity $entity): SaveResult;
}