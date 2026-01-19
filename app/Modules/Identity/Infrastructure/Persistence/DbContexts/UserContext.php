<?php

namespace App\Modules\Identity\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

final class UserContext extends DbContext
{
    /**
     * The table associated with the model.
     *
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $table = 'identity.users';

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
        'AccountBlockedOut',
        'AccountExpiresDate',
        'Reserved',
        'Password',
        'PersonId',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'Password',
    ];

    /**
     * Casts (ajuda em MSSQL: BIT <-> bool, datetime <-> Carbon).
     */
    protected $casts = [
        'AccountBlockedOut'  => 'boolean',
        'Reserved'           => 'boolean',
        'AccountExpiresDate' => 'datetime',
    ];
}
