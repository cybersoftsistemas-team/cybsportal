<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'address.addresses';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->integer('ZipCode');
            $table->uuid('StreetTypeId');
            $table->uuid('StreetId');
            $table->uuid('NeighborhoodId');
            $table->uuid('CityId');
            $table->uuid('StateId');

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('StreetTypeId')->references('Id')->on('address.streettypes');
            $table->foreign('StreetId')->references('Id')->on('address.streets');
            $table->foreign('NeighborhoodId')->references('Id')->on('address.neighborhoods');
            $table->foreign('CityId')->references('Id')->on('address.cities');
            $table->foreign('StateId')->references('Id')->on('address.states');

            // Indexes...
            $table->index('CityId');
            $table->index('NeighborhoodId');
            $table->index('StateId');
            $table->index('StreetId');
            $table->index('StreetTypeId');
            $table->index('ZipCode');

            // Unique Indexes...
            $table->unique(['StreetTypeId', 'StreetId', 'NeighborhoodId', 'CityId', 'StateId']);
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
