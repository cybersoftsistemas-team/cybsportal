<?php

namespace App\Shared\Infrastructure\Persistence\DbContexts;

enum SaveResult: string
{
    case CREATED = 'created';
    case UPDATED = 'updated';
    case UNCHANGED = 'unchanged';
}
