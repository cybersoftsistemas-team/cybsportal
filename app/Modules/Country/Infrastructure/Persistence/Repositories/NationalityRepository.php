<?php

namespace App\Modules\Country\Infrastructure\Persistence\Repositories;

use App\Modules\Country\Infrastructure\Persistence\DbContexts\NationalityContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class NationalityRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = NationalityContext::class;
}
