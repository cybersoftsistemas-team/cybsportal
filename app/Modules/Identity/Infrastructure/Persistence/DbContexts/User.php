<?php

namespace App\Modules\Identity\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

class User extends DbContext
{
    /**
     * SQL Server schema-qualified table.
     * Ex.: identity.users
     */
    protected $table = 'identity.users';

    /**
     * PK é UUID e não auto-incrementa.
     */
    protected $primaryKey = 'Id';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Ajuste de timestamps:
     * - Se sua tabela NÃO tiver created_at/updated_at, deixe false.
     * - Se tiver, mude para true.
     */
    public $timestamps = false;

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
        'Password'           => 'hashed',
    ];
}