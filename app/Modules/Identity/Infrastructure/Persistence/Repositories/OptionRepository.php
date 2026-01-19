<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Repositories;

use App\Modules\Identity\Infrastructure\Persistence\DbContexts\OptionContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class OptionRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = OptionContext::class;
}
