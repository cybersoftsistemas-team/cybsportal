<?php

namespace App\Shared\Domain\Entities;

abstract class Entity
{
    protected function __construct()
    {
        // Base entity constructor logic (if any)
    }

    /**
     * Convert the entity to an associative array for persistence.
     * 
     * @return array
     */
    abstract public function toData(): array;
}