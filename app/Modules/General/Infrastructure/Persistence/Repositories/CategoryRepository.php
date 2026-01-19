<?php

namespace App\Modules\General\Infrastructure\Persistence\Repositories;

use App\Modules\General\Infrastructure\Persistence\DbContexts\CategoryContext;
use App\Shared\Infrastructure\Persistence\Repositories\Repository;

final class CategoryRepository extends Repository
{
   /**
    * The type of database context.
    *
    * @var string
    */
    protected string $contextType = CategoryContext::class;
}
