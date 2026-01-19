<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'country.nationalities';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Name', 255);
            $table->uuid('CountryId');

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('CountryId')->references('Id')->on('country.countries');

            // Indexes...
            $table->index('CountryId');

            // Unique Indexes...
            $table->unique('Name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};
