<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'address.cities';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Name', 255);
            $table->integer('AreaCode')->default(DB::raw(0));
            $table->uuid('StateId');

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('StateId')->references('Id')->on('address.states');

            // Indexes...
            $table->index('StateId');

            // Unique Indexes...
            $table->unique(['StateId', 'Name']);
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
