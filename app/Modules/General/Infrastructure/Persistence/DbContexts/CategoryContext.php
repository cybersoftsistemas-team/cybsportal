<?php

namespace App\Modules\General\Infrastructure\Persistence\DbContexts;

use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;

final class CategoryContext extends DbContext
{
    /**
     * The table associated with the model.
     *
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $table = 'general.categories';

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
        'Reserved',
        'ParentId',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'Reserved' => 'boolean',
    ];

    /**
     * Relationships
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'ParentId', 'Id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'ParentId', 'Id');
    }
}
