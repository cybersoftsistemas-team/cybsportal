<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Database\SchemaSQL;

return new class extends Migration
{
    private string $schemaName = 'registration';
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(SchemaSQL::ensureSchema($this->schemaName));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement(SchemaSQL::dropSchema($this->schemaName));
    }
};
