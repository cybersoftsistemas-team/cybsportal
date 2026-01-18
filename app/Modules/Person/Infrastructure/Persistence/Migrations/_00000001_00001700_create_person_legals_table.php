<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'person.legals';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id');
            $table->string('Name', 255); // Razão Social
            $table->string('DoingBusinessAs', 255); // Nome fantasia
            $table->string('CRN', 14); // CRN – Company Registration Number (CNPJ)
            $table->dateTime('FoundationDate'); // Data de Fundação
            $table->string('StateInscriptionNumber', 20)->nullable(); // Inscrição Estadual
            $table->string('MunicipalInscriptionNumber', 20)->nullable(); // Inscrição Municipal
            $table->uuid('CompanyTypeId'); // Tipo de Empresa
            $table->uuid('NationalityId'); // Nacionalidade
            $table->uuid('StateId')->nullable(); // Estado de Registro

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('CompanyTypeId')->references('Id')->on('general.categories');
            $table->foreign('NationalityId')->references('Id')->on('country.nationalities');
            $table->foreign('Id')->references('Id')->on('person.persons');
            $table->foreign('StateId')->references('Id')->on('address.states');

            // Indexes...
            $table->index('CompanyTypeId');
            $table->index('NationalityId');
            $table->index('StateId');

            // Unique Indexes...
            $table->unique('CRN');
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
