<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Repositories;

use App\Modules\Identity\Infrastructure\Persistence\DbContexts\SettingContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class SettingRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = SettingContext::class;
}
