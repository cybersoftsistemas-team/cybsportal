<?php

namespace App\Modules\Country\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

final class CountryCodeContext extends DbContext
{
    /**
     * The table associated with the model.
     *
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $table = 'country.codes';

    /**
     * The primary keys for the model.
     *
     * @var array
     */
    protected $primaryKeys = ['CodeType', 'Code'];

    /**
     * Mass assignment.
     */
    protected $fillable = [
        'CodeType',
        'Code',
        'CountryId',
    ];
}
