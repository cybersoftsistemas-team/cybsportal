<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'person.addresses';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('PersonId'); // Pessoa
            $table->uuid('TypeId'); // Tipo de Endereço
            $table->uuid('AddressId'); // Endereço
            $table->string('AdditionalInformation', 255); // Informações Adicionais
            $table->boolean('Correspondence')->default(false); // Endereço de Correspondência
            $table->integer('Number')->default(0); // Número

            // Primary Key...
            $table->primary(['PersonId', 'TypeId']);

            // Foreign Keys...
            $table->foreign('AddressId')->references('Id')->on('address.addresses');
            $table->foreign('PersonId')->references('Id')->on('person.persons');
            $table->foreign('TypeId')->references('Id')->on('general.categories');

            // Indexes...
            $table->index('AddressId');
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
