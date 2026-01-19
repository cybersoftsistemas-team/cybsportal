<?php

namespace App\Modules\Identity\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

final class OptionContext extends DbContext
{
    /**
     * The table associated with the model.
     *
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $table = 'identity.options';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'Id';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Mass assignment.
     */
    protected $fillable = [
        'Id',
        'Name',
        'Description',
    ];
}
