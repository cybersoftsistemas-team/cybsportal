<?php

namespace App\Modules\Country\Infrastructure\Persistence\Repositories;

use App\Modules\Country\Infrastructure\Persistence\DbContexts\CountryCodeContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class CountryCodeRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = CountryCodeContext::class;
}
