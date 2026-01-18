<?php

namespace App\Shared\Infrastructure\Persistence\DbContexts;

use Illuminate\Database\Eloquent\Model;

abstract class DbContext extends Model
{
    /**
     * The table associated with the model.
     * 
     * SQL Server schema-qualified table.
     * Ex.: [schemaName].[tableName].
     *
     * @var string|null
     */
    protected $primaryKey = null;

    /**
     * The primary keys for the model.
     *
     * @var array
     */
    protected $primaryKeys = null;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the primary keys for the model.
     *
     * @return array
     */
    public function getKeyNames()
    {
        return $this->primaryKeys;
    }
}