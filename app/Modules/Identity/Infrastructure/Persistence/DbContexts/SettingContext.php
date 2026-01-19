<?php

namespace App\Modules\Identity\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

final class SettingContext extends DbContext
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
