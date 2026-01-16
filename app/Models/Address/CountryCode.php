<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class CountryCode extends Model
{
    /**
     * SQL Server schema-qualified table.
     * Ex.: address.countries
     */
    protected $table = 'address.country_codes';

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
        'CountryId',
        'CodeType',
        'Code',
    ];
}