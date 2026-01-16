<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'person.phones';
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('PersonId'); // Pessoa
            $table->uuid('TypeId'); // Tipo de Endereço
            $table->integer('Number')->default(0); // Número do Telefone
            $table->uuid('CityId'); // Cidade
            // Primary Key...
            $table->primary(['PersonId', 'TypeId']);
            // Foreign Keys...
            $table->foreign('CityId')->references('Id')->on('address.cities');
            $table->foreign('PersonId')->references('Id')->on('person.persons');
            $table->foreign('TypeId')->references('Id')->on('general.categories');
            // Indexes...
            $table->index('CityId');
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