<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'person.emails';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('PersonId'); // Pessoa
            $table->uuid('TypeId'); // Tipo de Endereço
            $table->string('Address', 255); // Endereço de E-mail

            // Primary Key...
            $table->primary(['PersonId', 'TypeId']);

            // Foreign Keys...
            $table->foreign('PersonId')->references('Id')->on('person.persons');
            $table->foreign('TypeId')->references('Id')->on('general.categories');

            // Indexes...
            $table->index('PersonId');
            $table->index('TypeId');
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
