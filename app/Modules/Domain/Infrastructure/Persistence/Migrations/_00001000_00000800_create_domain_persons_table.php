<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'domain.persons';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('DomainId'); // Domínio
            $table->uuid('PersonId'); // Pessoa

            // Primary Key...
            $table->primary(['DomainId', 'PersonId']);

            // Foreign Keys...
            $table->foreign('DomainId')->references('Id')->on('domain.domains');
            $table->foreign('PersonId')->references('Id')->on('person.persons');

            // Indexes...
            $table->index('DomainId');
            $table->index('PersonId');
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
