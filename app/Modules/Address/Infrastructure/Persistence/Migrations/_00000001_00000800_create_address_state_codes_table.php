<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'address.state_codes';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->string('CodeType', 50);
            $table->string('Code', 10);
            $table->uuid('StateId');

            // Primary Key...
            $table->primary(['CodeType', 'Code']);

            // Foreign Keys...
            $table->foreign('StateId')->references('Id')->on('address.states');

            // Indexes...
            $table->index('StateId');
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
