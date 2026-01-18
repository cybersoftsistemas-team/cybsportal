<?php

namespace App\Modules\Identity\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

class Setting extends DbContext
{
    /**
     * The table associated with the model.
     * 
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $table = 'identity.settings';

    /**
     * The primary keys for the model.
     *
     * @var array
     */
    protected $primaryKeys = ['UserId', 'OptionId'];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';
    
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Mass assignment.
     */
    protected $fillable = [
        'UserId',
        'OptionId',
        'Checked',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'Checked' => 'boolean',
    ];
}