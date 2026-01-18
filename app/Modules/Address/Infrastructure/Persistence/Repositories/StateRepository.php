<?php

namespace App\Modules\Address\Infrastructure\Persistence\Repositories;

use App\Modules\Address\Infrastructure\Persistence\DbContexts\StateContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class StateRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = StateContext::class;
}
