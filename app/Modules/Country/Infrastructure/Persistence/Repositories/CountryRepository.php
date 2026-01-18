<?php

namespace App\Modules\Country\Infrastructure\Persistence\Repositories;

use App\Modules\Country\Infrastructure\Persistence\DbContexts\CountryContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class CountryRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = CountryContext::class;
}
