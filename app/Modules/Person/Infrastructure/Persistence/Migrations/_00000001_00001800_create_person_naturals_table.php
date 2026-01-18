<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'person.naturals';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id');
            $table->string('FirstName', 127); // Nome
            $table->string('LastName', 127)->nullable(); // Sobrenome
            $table->dateTime('Birthday')->nullable(); // Data de Nascimento
            $table->string('SSN', 11); // SSN – Social Security Number (CPF)
            $table->uuid('PlaceOfBirthId')->nullable(); // Naturalidade
            $table->uuid('NationalityId')->nullable(); // Nacionalidade
            $table->uuid('GenderId')->nullable(); // Gênero

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('GenderId')->references('Id')->on('general.categories');
            $table->foreign('NationalityId')->references('Id')->on('country.nationalities');
            $table->foreign('Id')->references('Id')->on('person.persons');
            $table->foreign('PlaceOfBirthId')->references('Id')->on('address.cities');

            // Indexes...
            $table->index('GenderId');
            $table->index('NationalityId');
            $table->index('PlaceOfBirthId');

            // Unique Indexes...
            $table->unique('SSN');
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
