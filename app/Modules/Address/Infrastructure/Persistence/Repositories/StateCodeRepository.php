<?php

namespace App\Modules\Address\Infrastructure\Persistence\Repositories;

use App\Modules\Address\Infrastructure\Persistence\DbContexts\StateCodeContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class StateCodeRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = StateCodeContext::class;
}