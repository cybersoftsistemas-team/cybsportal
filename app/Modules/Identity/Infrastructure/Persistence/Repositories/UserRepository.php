<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Repositories;

use App\Modules\Identity\Infrastructure\Persistence\DbContexts\UserContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class UserRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = UserContext::class;
}
