<?php

namespace App\Shared\Infrastructure\Persistence;

final class SchemaSQL
{
    public static function ensureSchema(string $name): string
    {
        return "IF SCHEMA_ID(N'$name') IS NULL EXEC('CREATE SCHEMA [$name];');";
    }

    public static function dropSchema(string $name): string
    {
        return "DROP SCHEMA IF EXISTS \"$name\";";
    }
}