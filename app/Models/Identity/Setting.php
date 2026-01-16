<?php

namespace App\Models\Identity;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * SQL Server schema-qualified table.
     * Ex.: identity.settings
     */
    protected $table = 'identity.settings';

    /**
     * Tabela sem PK simples (PK composta: UserId + OptionId).
     * O Eloquent não suporta PK composta nativamente.
     */
    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Ajuste de timestamps:
     * - Se sua tabela NÃO tiver created_at/updated_at, deixe false.
     * - Se tiver, mude para true.
     */
    public $timestamps = false;

    protected $fillable = [
        'UserId',
        'OptionId',
        'Checked',
    ];

    protected $casts = [
        'Checked' => 'boolean',
    ];
}