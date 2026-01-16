<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * SQL Server schema-qualified table.
     * Ex.: general.categories
     */
    protected $table = 'general.categories';

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
        'Reserved',
        'ParentId',
    ];

    /**
     * Casts.
     */
    protected $casts = [
        'Reserved' => 'boolean',
    ];

    /**
     * Relações.
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